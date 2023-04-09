<?php

namespace App\Models\Filters\Card;

use PG\Filter\Contracts\Filter;

class Name implements Filter
{
    public static function apply($query, $name)
    {
        $query->whereLike('name', $name);
    }
}
