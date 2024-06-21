<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Exception;
use Illuminate\Http\Request;
use SoDe\Extend\Response;
use SoDe\Extend\JSON;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function get(Request $request, $id)
    {
        $template = Template::find($id);
        if ($template) {
            return response($template->content ?? '', 200, [
                'Content-Type' => 'text/html'
            ]);
        } else {
            return response('404 Not Found', 404, [
                'Content-Type' => 'text/html'
            ]);
        }
    }

    public function list(Request $request)
    {
        $response = new Response();
        try {
            $templates = Template::select(['id', 'name', 'description', 'data_type', 'visible', 'status'])
                ->where('status', true)
                ->get();

            $response->status = 200;
            $response->message = 'Operacion correcta';
            $response->data = $templates->toArray();
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
            $jpa = Template::find($request->id);

            if (!$jpa) {
                $body['content'] = '<i>- Bien hecho, creaste una plantilla -</i>';
                $body['data_type'] = '{}';
                Template::create($body);
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
            $updated = Template::where('id', $request->id)
                ->update([
                    'content' => $request->content,
                    'data_type' => $request->data_type
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

    static function regulate(Request $request)
    {
        $response = new Response();
        try {
            $updated = Template::where('id', $request->id)
                ->update([
                    'data_type' => JSON::stringify($request->data_type)
                ]);

            if (!$updated) throw new Exception('No se ha cambiado los tipos de dato de la plantilla');

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
            $deleted = Template::where('id', $request->id)
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
            $deleted = Template::where('id', $id)
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
