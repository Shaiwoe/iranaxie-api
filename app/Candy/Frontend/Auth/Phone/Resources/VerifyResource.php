<?php

namespace App\Candy\Frontend\Auth\Phone\Resources;

use App\Resources\BaseResource;

class VerifyResource extends BaseResource
{
    public function toArray($request)
    {
        return ['id' => $this->id, 'phone' => $this->phone, 'token' => $this->token, 'type' => $this->type];
    }
}
