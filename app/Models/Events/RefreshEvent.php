<?php

namespace App\Models\Events;

trait RefreshEvent
{
    public static function booted()
    {
        static::observe(Servers\RefreshServer::class);

        parent::booted();
    }
}
