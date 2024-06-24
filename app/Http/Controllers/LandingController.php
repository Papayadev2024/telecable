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

        $regex = '{{s*${key}s*}}';
        $regex2 = '{[s*${key}s*]}';
        $regexContainers = '/{\[(.*?)\]}/gs';
        $regexVariables = '/{{(.*?)}}/gs';
        // Devolver la vista con las variables finales y otros datos
        return view('pages.landings.config')
            ->with('landing', $landingJpa)
            ->with('regex', $regex)
            ->with('regex2', $regex2)
            ->with('regexContainers', $regexContainers)
            ->with('regexVariables', $regexVariables)
            ->with('llavesBegin', '{{')
            ->with('llavesEnd', '}}')
            ->with('and', '&&');
    }

    public function get(Request $request, $page)
    {
        $query = Landing::select(['landings.id', 'landings.name', 'templates.content', 'templates.data_type'])
            ->join('templates', 'templates.id', 'landings.template_id')
            ->where('landings.page', $page);

        if (!Auth::check()) $query->where('landings.visible', true);
        $jpa = $query->first();

        if ($jpa) {
            $landingSettings = LandingSetting::select([
                'id', 'name', 'value', 'data_type'
            ])
                ->where('landing_id', $jpa->id)
                ->whereNull('parent')
                ->get();

            $html = $jpa->content;
            $types = JSON::parse($jpa->data_type);

            foreach ($landingSettings as $setting) {
                switch ($setting->data_type) {
                    case 'image':
                        $path = $setting->value;
                        if (!$path) $path = '/uploads/default-image.jpg';
                        $html = str_replace('{{' . $setting->name . '}}', url('/') . '/api/landing-settings/file/download?path=' . $path, $html);
                        break;
                    case 'container':
                        $values = [];
                        if ($setting->value) {
                            $settingValue = JSON::parse($setting->value);
                        } else {
                            $settingValue = [];
                        }
                        foreach ($settingValue as $object) {
                            $base = $setting->name;
                            foreach ($object as $key => $value) {
                                if (isset($types[$key]) && $types[$key] == 'image') {
                                    $path = $value;
                                    if (!$path) $path = '/uploads/default-image.jpg';
                                    $base = str_replace('{{' . $key . '}}', url('/') . '/api/landing-settings/file/download?path=' . $path, $base);
                                } else {
                                    $base = str_replace('{{' . $key . '}}', $value, $base);
                                }
                            }
                            $values[] = $base;
                        }
                        $html = str_replace('{[' . $setting->name . ']}', implode('', $values), $html);
                        break;
                    default:
                        $html = str_replace('{{' . $setting->name . '}}', $setting->value, $html);
                        break;
                }
            }

            $html = str_replace('{{csrf_token}}', csrf_token(), $html);
            $html = str_replace('{{landing.name}}', $jpa->name, $html);

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
