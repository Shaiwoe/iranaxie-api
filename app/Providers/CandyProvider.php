<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CandyProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(base_path('routes/candy.php'));
    }
}
