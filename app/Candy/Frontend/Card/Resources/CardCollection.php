<?php

namespace App\Candy\Frontend\Card\Resources;

use App\Resources\BaseCollection;

class CardCollection extends BaseCollection
{
    public function toArray($request)
    {
        return CardResource::collection($this->resource);
    }
}
