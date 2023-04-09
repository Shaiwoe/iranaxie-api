<?php

namespace App\Models\Events\Servers;

class RefreshServer
{
    public function saved($model)
    {
        $model->refresh();
    }
}
