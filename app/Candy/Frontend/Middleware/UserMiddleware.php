<?php

namespace App\Candy\Frontend\Middleware;

use App\Exceptions\BaseException;

class UserMiddleware
{
    public function handle($request, \Closure $next)
    {
        $user = $request->user();

        if (!$user) {

            throw new BaseException(trans('messages.access'));
        }

        return $next($request);
    }
}
