<?php

namespace App\Candy\Frontend\Exchange\Requests;

use App\Requests\BaseRequest;

class BuyRequest extends BaseRequest
{
    public function rules()
    {
        return ['coin_id' => ['required', 'exists:coins,id'], 'card_id' => ['required', 'exists:cards,id'], 'network_id' => ['required', 'exists:networks,id'], 'wallet_address' => ['required'], 'amount' => ['required', 'numeric']];
    }
}
