<?php

namespace App\Candy\Frontend\Exchange\Requests;

use App\Requests\BaseRequest;

class SellRequest extends BaseRequest
{
    public function rules()
    {
        return ['coin_id' => ['required', 'exists:coins,id'], 'card_id' => ['required', 'exists:cards,id'], 'wallet_id' => ['required', 'exists:wallets,id'], 'amount' => ['required', 'numeric'], 'wallet_track' => ['required']];
    }
}
