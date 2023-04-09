<?php

namespace App\Candy\Frontend\Account\Requests;

use App\Requests\BaseRequest;

class CreateRequest extends BaseRequest
{
    public function rules()
    {
        return ['name' => ['required'], 'address' => ['required']];
    }
}
