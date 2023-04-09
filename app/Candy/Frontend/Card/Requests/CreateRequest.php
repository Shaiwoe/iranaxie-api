<?php

namespace App\Candy\Frontend\Card\Requests;

use App\Requests\BaseRequest;

class CreateRequest extends BaseRequest
{
    public function rules()
    {
        return ['bank_id' => ['required', 'exists:banks,id'], 'name' => ['required'], 'card' => ['required'], 'account' => ['required'], 'sheba' => ['required']];
    }
}
