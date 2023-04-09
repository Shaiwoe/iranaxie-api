<?php

namespace App\Candy\Frontend\Common\User\Resources;

use App\Resources\BaseResource;

class CoinResource extends BaseResource
{
    public function toArray($request)
    {
        return ['id' => $this->id, 'icon' => IconResource::make($this->icon), 'name' => $this->name, 'class' => $this->class, 'buy_price' => $this->buy_price, 'sell_price' => $this->sell_price];
    }
}
