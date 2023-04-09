<?php

namespace App\Candy\Frontend\Exchange\Resources;

use App\Resources\BaseResource;

class ExchangeResource extends BaseResource
{
    public function toArray($request)
    {
        return ['id' => $this->id, 'coin' => CoinResource::make($this->coin), 'card' => CardResource::make($this->card), 'network_id' => NetworkResource::make($this->network), 'wallet' => WalletResource::make($this->wallet), 'type' => $this->type, 'amount' => $this->amount, 'price' => $this->price, 'fee' => $this->fee, 'link' => $this->link, 'wallet_address' => $this->wallet_address, 'wallet_track' => $this->wallet_track, 'payment_track' => $this->payment_track, 'status' => $this->status];
    }
}
