<?php

namespace App\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use App\Exceptions\BaseException;

class BaseRequest extends FormRequest
{
    protected function failedValidation(Validator $validator)
    {
        $message = $validator->messages()->first();

        throw new BaseException($message);
    }
}
