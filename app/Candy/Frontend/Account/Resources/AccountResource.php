<?php

namespace App\Candy\Frontend\Account\Resources;

use App\Resources\BaseResource;

class AccountResource extends BaseResource
{
    public function toArray($request)
    {
        return ['id' => $this->id, 'name' => $this->name, 'address' => $this->address, 'slp' => $this->slp, 'rank' => $this->rank];
    }
}
