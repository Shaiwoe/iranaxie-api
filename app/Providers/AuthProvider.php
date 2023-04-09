<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthProvider extends ServiceProvider
{
    public function boot()
    {
        $request = function($request) {

            return User::whereToken($request->header('token'))->first();
        };

        Auth::viaRequest('custom', $request);
    }
}
