<?php

namespace App\Candy\Frontend\Card\Resources;

use App\Resources\BaseResource;

class CardResource extends BaseResource
{
    public function toArray($request)
    {
        return ['id' => $this->id, 'bank' => BankResource::make($this->bank), 'name' => $this->name, 'card' => $this->card, 'account' => $this->account, 'sheba' => $this->sheba, 'status' => $this->status];
    }
}
