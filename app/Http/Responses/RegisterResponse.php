<?php

namespace App\Http\Responses;

use App\Helpers\EmailConfig;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;


class RegisterResponse implements RegisterResponseContract
{

    public function toResponse($request)
    {
        $role = Auth::user()->roles->pluck('name');
        $usuario = Auth::user();
        
        if ($request->wantsJson()) {
            return response()->json(['two_factor' => false]);
        }

        switch ($role[0]) {
            case 'Admin':
                return redirect()->intended(config('fortify.home'));
            case 'Customer':
                $this-> envioCorreo($usuario);
                return redirect()->intended(config('fortify.home_public'));
            default:
                return redirect()->intended(config('fortify.home_public'));
        }
    }



    private function envioCorreo($data){
        
        $name = $data['name'];
        $mail = EmailConfig::config();
        try {
            $mail->addAddress($data['email']);
            $mail->Body = "Hola $name. Gracias por registrarte";
            $mail->isHTML(true);
            $mail->send();
            
        } catch (\Throwable $th) {
            //throw $th;
        }
}

}