<?php

/**
 * Documentation for this.
 */
$path = dirname(__DIR__);

/**
 * Documentation for this.
 */
require $path.'/vendor/autoload.php';

/**
 * Documentation for this.
 */
require $path.'/bootstrap/app.php';

/**
 * Documentation for this.
 */
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

/**
 * Documentation for this.
 */
$request = Illuminate\Http\Request::capture();

/**
 * Documentation for this.
 */
$response = $kernel->handle($request);

/**
 * Documentation for this.
 */
$response->send();

/**
 * Documentation for this.
 */
$kernel->terminate($request, $response);
