<?php

namespace App\Models\Filters\Card;

use PG\Filter\Contracts\Filter;

class Body implements Filter
{
    public static function apply($query, $body)
    {
        $query->whereBody($body);
    }
}
