<?php

namespace App\Models\Scopes;

trait Descending
{
    public function scopeDescendingById($query)
    {
        return $query->latest('id');
    }
}
