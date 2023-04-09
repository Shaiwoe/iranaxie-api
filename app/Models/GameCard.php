<?php

namespace App\Models;

class GameCard extends BaseModel
{
    use \PG\Filter\Filter;

    public function getFilters()
    {
        return ['name' => Filters\Card\Name::class, 'type' => Filters\Card\Type::class, 'body' => Filters\Card\Body::class];
    }

    public function icon()
    {
        return $this->belongsTo(Icon::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
