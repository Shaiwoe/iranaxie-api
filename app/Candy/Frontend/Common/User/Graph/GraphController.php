<?php

namespace App\Candy\Frontend\Common\User\Graph;

use App\Controllers\BaseController;
use App\Models\Queries\UserQuery;

class GraphController extends BaseController
{
    public function orders()
    {
        $user = request()->user();

        if (!$user) {
            $this->raiseNothing();
        }

        $data = UserQuery::getCountOfOrders($user->id);

        if (!$data) {
            $this->raiseNothing();
        }

        return compact('data');
    }
}
