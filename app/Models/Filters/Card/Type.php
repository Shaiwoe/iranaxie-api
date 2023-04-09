<?php

namespace App\Models\Filters\Card;

use PG\Filter\Contracts\Filter;

class Type implements Filter
{
    public static function apply($query, $type)
    {
        $query->whereType($type);
    }
}
