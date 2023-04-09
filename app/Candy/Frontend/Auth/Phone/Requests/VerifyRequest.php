<?php

namespace App\Candy\Frontend\Auth\Phone\Requests;

use App\Requests\BaseRequest;

class VerifyRequest extends BaseRequest
{
    public function rules()
    {
        return ['phone' => ['required'], 'token' => ['required']];
    }
}
