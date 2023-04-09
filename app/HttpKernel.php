<?php

namespace App;

use Illuminate\Foundation\Http\Middleware;
use Illuminate\Foundation\Http\Kernel;

class HttpKernel extends Kernel
{
    protected $middleware = [Middleware\TrimStrings::class, Middleware\ConvertEmptyStringsToNull::class];
}
