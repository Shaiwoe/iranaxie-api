<?php

namespace App\Models\Events\Servers;

class TokenServer
{
    public function creating($model)
    {
        $model->generate();
    }
}
