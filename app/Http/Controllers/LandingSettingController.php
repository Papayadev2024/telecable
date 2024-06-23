<?php

namespace App\Http\Controllers;

use App\Models\Landing;
use App\Models\LandingSetting;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use SoDe\Extend\Crypto;
use SoDe\Extend\JSON;
use SoDe\Extend\Response;

class LandingSettingController extends Controller
{
    public function regulate(Request $request, $landing_id)
    {
        $response = new Response();
        try {
            $body = $request->all();
            LandingSetting::where('landing_id', $landing_id)
                ->whereNotIn('name', [...$body['containers'], ...$body['variables']])
                ->delete();

            foreach ($body['containers'] as $container) {
                LandingSetting::updateOrCreate([
                    'name' => $container,
                    'landing_id' => $landing_id
                ], [
                    'landing_id' => $landing_id,
                    'name' => $container,
                    'data_type' => 'container'
                ]);
            }

            $template = Landing::select([
                'templates.data_type'
            ])
                ->join('templates', 'templates.id', '=', 'landings.template_id')
                ->where('landings.id', $landing_id)
                ->first();

            $data_types = JSON::parse($template->data_type);

            foreach ($body['variables'] as $variable) {
                $parentJpa = LandingSetting::select('id')
                    ->where('name', 'like', '%{{' . $variable . '}}%')
                    ->where('landing_id', $landing_id)
                    ->first();
                LandingSetting::updateOrCreate([
                    'name' => $variable,
                    'landing_id' => $landing_id
                ], [
                    'landing_id' => $landing_id,
                    'name' => $variable,
                    'parent' => $parentJpa->id ?? null,
                    'data_type' => isset($data_types[$variable]) ? $data_types[$variable] : 'text'
                ]);
            }

            $settings = LandingSetting::select([
                'id',
                'landing_id',
                'name',
                'value',
                'data_type',
                'parent'
            ])
                ->where('landing_id', $landing_id)
                ->get();

            $response->status = 200;
            $response->message = 'Operacion correcta';
            $response->data = $settings;
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

    public function massive(Request $request)
    {
        $response = new Response();
        try {
            $settings = $request->all();

            foreach ($settings as $setting) {
                LandingSetting::updateOrCreate(['id' => $setting['id']], $setting);
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

    public function update(Request $request)
    {
        $response = new Response();

        try {
            $setting = LandingSetting::find($request->id);
            $setting->value = $request->value;
            $setting->save();

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

    public function file(Request $request)
    {
        // Iniciar una respuesta genérica
        $response = new Response();

        try {
            $file = $request->file('file');

            $filepath = 'uploads/landing/' . Crypto::randomUUID() . '.' . $file->getClientOriginalExtension();

            Storage::put($filepath, file_get_contents($file));

            $response->status = 200;
            $response->message = 'Operacion correcta';
            $response->data = [
                'data_type' => 'file',
                'value' => $filepath,
                'file_type' => $file->getMimeType() ?? 'Unknown'
            ];
        } catch (\Throwable $th) {
            $response->status = 400;
            $response->message = $th->getMessage();
        }

        return response()->json($response->toArray(), $response->status);
        // Devolver la respuesta final
    }

    public function getFile(Request $request)
    {
        try {
            $path = $request->path;
            if (!$path) $path = '/uploads/default-image.jpg';
            $content = Storage::get($path);

            return response($content, 200, [
                'Content-Type' => 'application/octet-stream'
            ]);
        } catch (\Throwable $th) {

            return response(Storage::get('/uploads/default-image.jpg'), 400, [
                'Content-Type' => 'application/octet-stream'
            ]);
        }
    }
}
