<?php

namespace App\Models\Events;

trait TokenEvent
{
    public static function booted()
    {
        static::observe(Servers\TokenServer::class);

        parent::booted();
    }
}
