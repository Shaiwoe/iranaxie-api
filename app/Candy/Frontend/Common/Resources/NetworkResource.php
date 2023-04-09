<?php

namespace App\Candy\Frontend\Common\Resources;

use App\Resources\BaseResource;

class NetworkResource extends BaseResource
{
    public function toArray($request)
    {
        return ['id' => $this->id, 'coin' => CoinResource::make($this->coin), 'name' => $this->name, 'fee' => $this->fee];
    }
}
