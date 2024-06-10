<?php

namespace App\Http\Controllers;

use App\Models\Landing;
use App\Models\LandingSetting;
use App\Models\Template;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SoDe\Extend\JSON;
use SoDe\Extend\Response;

class LandingController extends Controller
{

    public function index()
    {
        $templates = Template::select(['id', 'name'])
            ->where('status', true)
            ->where('visible', true)
            ->get();

        return view('pages.landings.index', compact('templates'));
    }

    public function config(Request $request, $id)
    {
        // Obtener la información de la landing y la plantilla asociada
        $landingJpa = Landing::select([
            'landings.*',
            'templates.content',
            'templates.data_type'
        ])
            ->join('templates', 'templates.id', 'landings.template_id')
            ->where('landings.id', $id)
            ->first();

        // Extraer las variables de la plantilla
        preg_match_all('/\{\{(\w+)\}\}/', $landingJpa->content, $coincidences);
        $variables = [];
        foreach ($coincidences[1] as $variable) {
            // Verificar si la variable ya existe en la lista final
            $exists = false;
            foreach ($variables as $existingVariable) {
                if ($existingVariable->name === $variable) {
                    $exists = true;
                    break;
                }
            }
            // Si la variable no existe en la lista final, se agrega
            if (!$exists) {
                $variables[] = (object)[
                    'id' => 0,
                    'name' => $variable,
                    'value' => '',
                    'type' => 'text'
                ];
            }
        }

        // Obtener los settings guardados en la base de datos
        $settingsJpa = LandingSetting::where('landing_id', $id)->get();

        // Crear un diccionario de settings guardados para fácil acceso
        $settingsMap = [];
        foreach ($settingsJpa as $setting) {
            $settingsMap[$setting->name] = $setting;
        }

        $data_types = JSON::parse($landingJpa->data_type ?? '{}');

        // Combinar variables con settings guardados
        $finalVariables = array_map(function ($variable) use ($settingsMap, $data_types) {
            if (isset($settingsMap[$variable->name])) {
                // Si el setting ya existe en la BD, actualizamos id y value
                $variable->id = $settingsMap[$variable->name]->id;
                $variable->value = $settingsMap[$variable->name]->value;
            }
            if (isset($data_types[$variable->name])) {
                $variable->type = $data_types[$variable->name];
            }
            return $variable;
        }, $variables);

        // Eliminar settings que no están en la plantilla actual
        LandingSetting::where('landing_id', $id)
            ->whereNotIn('name', array_map(function ($variable) {
                return $variable->name;
            }, $variables))
            ->delete();

        $regex = '{{s*${key}s*}}';
        // Devolver la vista con las variables finales y otros datos
        return view('pages.landings.config')
        ->with('landing', $landingJpa)
        ->with('variables', $finalVariables)
        ->with('regex', $regex);
    }

    public function get(Request $request, $page)
    {
        $query = Landing::select(['landings.id', 'templates.content'])
            ->join('templates', 'templates.id', 'landings.template_id')
            ->where('landings.page', $page);

        if (!Auth::check()) $query->where('landings.visible', true);
        $jpa = $query->first();

        if ($jpa) {
            $landingSettings = LandingSetting::where('landing_id', $jpa->id)->get();

            $html = $jpa->content;

            foreach ($landingSettings as $setting) {
                $html = str_replace('{{' . $setting->name . '}}', $setting->value, $html);
            }

            return response($html ?? '', 200, [
                'Content-Type' => 'text/html'
            ]);
        } else {
            return response()->view('public.404', [], 404);
        }
    }

    public function list(Request $request)
    {
        $response = new Response();
        try {
            $jpas = Landing::select([
                'landings.*',
                'templates.id AS template__id',
                'templates.name AS template__name',
                'templates.description AS template__description'
            ])
                ->join('templates', 'templates.id', 'landings.template_id')
                ->where('landings.status', true)
                ->get();

            $clients = [];
            foreach ($jpas as $jpa) {
                $client = JSON::unflatten($jpa->toArray(), '__');
                $clients[] = $client;
            }

            $response->status = 200;
            $response->message = 'Operacion correcta';
            $response->data = $clients;
        } catch (\Throwable $th) {
            $response->status = 400;
            $response->message = $th->getMessage();
            $response->data = [];
        } finally {
            return response(
                $response->toArray(),
                $response->status
            );
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function save(Request $request)
    {
        $response = new Response();
        try {
            $body = $request->all();
            $jpa = Landing::find($request->id);

            if (!$jpa) {
                $body['content'] = '<i>- Bien hecho, creaste una plantilla -</i>';
                Landing::create($body);
            } else {
                $jpa->update($body);
            }

            $response->status = 200;
            $response->message = 'Operacion correcta';
        } catch (\Throwable $th) {
            $response->status = 400;
            $response->message = $th->getMessage();
        } finally {
            return response(
                $response->toArray(),
                $response->status
            );
        }
    }

    static function upload(Request $request)
    {
        $response = new Response();
        try {
            $updated = Landing::where('id', $request->id)
                ->update([
                    'content' => $request->content
                ]);

            if (!$updated) throw new Exception('No se actualizado el registro o el contenido es el mismo');

            $response->status = 200;
            $response->message = 'Operacion correcta';
        } catch (\Throwable $th) {
            $response->status = 400;
            $response->message = $th->getMessage();
        } finally {
            return response(
                $response->toArray(),
                $response->status
            );
        }
    }

    static function visible(Request $request)
    {
        $response = new Response();
        try {
            $deleted = Landing::where('id', $request->id)
                ->update([
                    'visible' => $request->visible
                ]);

            if (!$deleted) throw new Exception('No se ha cambiado la visibilidad del registro');

            $response->status = 200;
            $response->message = 'Operacion correcta';
        } catch (\Throwable $th) {
            $response->status = 400;
            $response->message = $th->getMessage();
        } finally {
            return response(
                $response->toArray(),
                $response->status
            );
        }
    }

    static function delete(Request $request, string $id)
    {
        $response = new Response();
        try {
            $deleted = Landing::where('id', $id)
                ->update([
                    'status' => false
                ]);

            if (!$deleted) throw new Exception('No se ha eliminado ningun registro');

            $response->status = 200;
            $response->message = 'Operacion correcta';
        } catch (\Throwable $th) {
            $response->status = 400;
            $response->message = $th->getMessage();
        } finally {
            return response(
                $response->toArray(),
                $response->status
            );
        }
    }
}
