<?php

namespace App\Candy\Frontend\Auth\Phone\Requests;

use App\Requests\BaseRequest;

class LoginRequest extends BaseRequest
{
    public function rules()
    {
        return ['phone' => ['required', 'digits:11']];
    }
}
