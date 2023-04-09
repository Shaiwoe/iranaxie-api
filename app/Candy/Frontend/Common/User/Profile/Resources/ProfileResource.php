<?php

namespace App\Candy\Frontend\Common\User\Profile\Resources;

use App\Resources\BaseResource;

class ProfileResource extends BaseResource
{
    public function toArray($request)
    {
        return ['id' => $this->id, 'full_name' => $this->full_name, 'father_name' => $this->father_name, 'national' => $this->national, 'phone' => $this->phone, 'country' => $this->country, 'city' => $this->city, 'street' => $this->street, 'postal' => $this->postal, 'picture' => $this->absolutePicture, 'status' => $this->status];
    }
}
