<?php

namespace App\Candy\Frontend\Account\Graph;

use App\Models\Queries\AccountQuery;
use App\Controllers\BaseController;

class GraphController extends BaseController
{
    public function dailySlp($id)
    {
        $account = request()->user()->accounts()->find($id);

        if (!$account) {
            $this->raiseNothing();
        }

        $data = AccountQuery::getDailySlp($id);

        if (!$data) {
            $this->raiseNothing();
        }

        return compact('data');
    }

    public function monthlySlp($id)
    {
        $account = request()->user()->accounts()->find($id);

        if (!$account) {
            $this->raiseNothing();
        }

        $data = AccountQuery::getMonthlySlp($id);

        if (!$data) {
            $this->raiseNothing();
        }

        return compact('data');
    }

    public function dailyRank($id)
    {
        $account = request()->user()->accounts()->find($id);

        if (!$account) {
            $this->raiseNothing();
        }

        $data = AccountQuery::getDailyRank($id);

        if (!$data) {
            $this->raiseNothing();
        }

        return compact('data');
    }

    public function monthlyRank($id)
    {
        $account = request()->user()->accounts()->find($id);

        if (!$account) {
            $this->raiseNothing();
        }

        $data = AccountQuery::getMonthlyRank($id);

        if (!$data) {
            $this->raiseNothing();
        }

        return compact('data');
    }
}
