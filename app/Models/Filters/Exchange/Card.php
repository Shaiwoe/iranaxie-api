<?php

namespace App\Models\Filters\Exchange;

use PG\Filter\Contracts\Filter;

class Card implements Filter
{
    public static function apply($query, $card)
    {
        $query->whereHas('card', function($query) use($card) {
            $query->whereId($card);
        });
    }
}
