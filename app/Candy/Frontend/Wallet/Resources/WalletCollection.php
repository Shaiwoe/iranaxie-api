<?php

namespace App\Candy\Frontend\Wallet\Resources;

use App\Resources\BaseCollection;

class WalletCollection extends BaseCollection
{
    public function toArray($request)
    {
        return WalletResource::collection($this->resource);
    }
}
