<?php

namespace App\Controllers;

use Illuminate\Routing\Controller;
use App\Exceptions\BaseException;

abstract class BaseController extends Controller
{
    public function raiseNothing()
    {
        throw new BaseException(trans('messages.nothing'));
    }
}
