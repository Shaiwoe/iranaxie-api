<?php

namespace App\Candy\Frontend\Common\User\Profile\Requests;

use App\Requests\BaseRequest;

class CreateRequest extends BaseRequest
{
    public function rules()
    {
        return ['full_name' => ['required'], 'father_name' => ['required'], 'national' => ['required'], 'phone' => ['nullable'], 'country' => ['nullable'], 'city' => ['nullable'], 'street' => ['nullable'], 'postal' => ['nullable'], 'picture' => ['required', 'image']];
    }
}
