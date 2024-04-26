<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;


class RegisterResponse implements RegisterResponseContract
{

    public function toResponse($request)
    {
        $role = Auth::user()->roles->pluck('name');
        dump($role[0]);
        
        if ($request->wantsJson()) {
            return response()->json(['two_factor' => false]);
        }

        switch ($role[0]) {
            case 'Admin':
                return redirect()->intended(config('fortify.home'));
            case 'Customer':
                return redirect()->intended(config('fortify.home_public'));
            default:
                return redirect()->intended(config('fortify.home_public'));
        }
    }

}