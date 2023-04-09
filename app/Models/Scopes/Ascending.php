<?php

namespace App\Models\Scopes;

trait Ascending
{
    public function scopeAscendingById($query)
    {
        return $query->oldest('id');
    }
}
