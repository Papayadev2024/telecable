<?php

namespace App\Http\Controllers;

use App\Models\Template;
use App\Http\Requests\StoreTemplateRequest;
use App\Http\Requests\UpdateTemplateRequest;
use Exception;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;
use SoDe\Extend\Response;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $templates = Template::where('status', true)->get();
        return view('pages.templates.index', compact('templates'));
    }

    public function list(Request $request)
    {
        $response = new Response();
        try {
            $templates = Template::select(['id', 'name', 'description', 'visible', 'status'])
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
