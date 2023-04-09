<?php

namespace App\Candy\Frontend\Wallet\Requests;

use App\Requests\BaseRequest;

class CreateRequest extends BaseRequest
{
    public function rules()
    {
        return ['network_id' => ['required', 'exists:networks,id'], 'name' => ['required'], 'address' => ['required']];
    }
}
