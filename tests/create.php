<?php

/**
 * Documentation for this.
 */
$path = dirname(__DIR__);

/**
 * Documentation for this.
 */
require $path.'/bootstrap/app.php';

/**
 * Documentation for this.
 */
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

/**
 * Documentation for this.
 */
$kernel->bootstrap();

/**
 * Documentation for this.
 */
return $app;
