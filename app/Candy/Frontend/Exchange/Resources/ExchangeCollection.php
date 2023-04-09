<?php

namespace App\Candy\Frontend\Exchange\Resources;

use App\Resources\BaseCollection;

class ExchangeCollection extends BaseCollection
{
    public function toArray($request)
    {
        return ExchangeResource::collection($this->resource);
    }
}
