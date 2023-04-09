<?php

namespace App\Candy\Frontend\Game\Resources;

use App\Resources\BaseResource;

class CardResource extends BaseResource
{
    public function toArray($request)
    {
        return ['id' => $this->id, 'icon' => IconResource::make($this->icon), 'category' => CategoryResource::make($this->category), 'name' => $this->name, 'type' => $this->type, 'attack' => $this->attack, 'defence' => $this->defence, 'health' => $this->health, 'energy' => $this->energy, 'point' => $this->point, 'description' => $this->description];
    }
}
