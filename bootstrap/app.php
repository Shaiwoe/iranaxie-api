<?php

/**
 * Documentation for this.
 */
$path = dirname(__DIR__);

/**
 * Documentation for this.
 */
$app = new Illuminate\Foundation\Application($path);

/**
 * Documentation for this.
 */
$app->singleton(Illuminate\Contracts\Http\Kernel::class, App\HttpKernel::class);

/**
 * Documentation for this.
 */
$app->singleton(Illuminate\Contracts\Console\Kernel::class, App\Console\ConsoleKernel::class);

/**
 * Documentation for this.
 */
$app->singleton(Illuminate\Contracts\Debug\ExceptionHandler::class, Illuminate\Foundation\Exceptions\Handler::class);

/**
 * Documentation for this.
 */
return $app;
