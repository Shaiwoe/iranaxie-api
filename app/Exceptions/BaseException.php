<?php

namespace App\Exceptions;

use Illuminate\Contracts\Support\Responsable;

class BaseException extends \RuntimeException implements Responsable
{
    public function toResponse($request)
    {
        return ['message' => $this->message];
    }
}
