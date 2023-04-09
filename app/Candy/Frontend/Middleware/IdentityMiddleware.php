<?php

namespace App\Candy\Frontend\Middleware;

use App\Exceptions\BaseException;

class IdentityMiddleware
{
    public function handle($request, \Closure $next)
    {
        $user = $request->user();

        if (!$user->latestProfile OR $user->latestProfile->status <> 'approved') {

            throw new BaseException(trans('messages.identity'));
        }

        return $next($request);
    }
}
