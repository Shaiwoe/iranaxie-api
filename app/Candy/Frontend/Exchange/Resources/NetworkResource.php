<?php

namespace App\Candy\Frontend\Exchange\Resources;

use App\Resources\BaseResource;

class NetworkResource extends BaseResource
{
    public function toArray($request)
    {
        return ['id' => $this->id, 'name' => $this->name];
    }
}
