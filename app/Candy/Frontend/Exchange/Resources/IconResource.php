<?php

namespace App\Candy\Frontend\Exchange\Resources;

use App\Resources\BaseResource;

class IconResource extends BaseResource
{
    public function toArray($request)
    {
        return ['id' => $this->id, 'name' => $this->name, 'address' => $this->absoluteAddress];
    }
}
