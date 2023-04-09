<?php

namespace App\Candy\Frontend\Common\Resources;

use App\Resources\BaseResource;

class WalletResource extends BaseResource
{
    public function toArray($request)
    {
        return ['id' => $this->id, 'network' => NetworkResource::make($this->network), 'name' => $this->name, 'address' => $this->address, 'status' => $this->status];
    }
}
