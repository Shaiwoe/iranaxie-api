<?php

namespace App\Candy\Frontend\Exchange\Resources;

use App\Resources\BaseResource;

class BankResource extends BaseResource
{
    public function toArray($request)
    {
        return ['id' => $this->id, 'icon' => IconResource::make($this->icon), 'name' => $this->name];
    }
}
