<?php

namespace App\Http\Controllers;

use App\Models\LandingSetting;
use Illuminate\Http\Request;
use SoDe\Extend\Response;

class LandingSettingController extends Controller
{
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
}
