<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\BaseModel;

class ModelProvider extends ServiceProvider
{
    public function boot()
    {
        BaseModel::unguard(true);
    }
}
