<?php

namespace App\Providers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\ServiceProvider;

class QueryProvider extends ServiceProvider
{
    public function boot()
    {
        Builder::macro('whereLike', function($attribute, $value) {

            $this->where($attribute, 'LIKE', "%{$value}%");
        });
    }
}
