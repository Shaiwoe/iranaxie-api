<?php

namespace App\Models\Scopes;

trait TimeDate
{
    public function scopeSubOneMinute($query)
    {
        $query->whereRaw('DATE_ADD(created, INTERVAL 1 MINUTE) > CURRENT_TIMESTAMP');
    }
}
