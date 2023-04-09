<?php

namespace App\Candy\Frontend\Game\Resources;

use App\Resources\BaseResource;

class CategoryResource extends BaseResource
{
    public function toArray($request)
    {
        return ['id' => $this->id, 'icon' => IconResource::make($this->icon), 'name' => $this->name];
    }
}
