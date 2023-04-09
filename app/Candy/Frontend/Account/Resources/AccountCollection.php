<?php

namespace App\Candy\Frontend\Account\Resources;

use App\Resources\BaseCollection;

class AccountCollection extends BaseCollection
{
    public function toArray($request)
    {
        return AccountResource::collection($this->resource);
    }
}
