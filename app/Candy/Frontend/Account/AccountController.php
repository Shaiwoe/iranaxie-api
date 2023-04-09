<?php

namespace App\Candy\Frontend\Account;

use App\Candy\Frontend\Account\Resources\AccountCollection;
use App\Candy\Frontend\Account\Resources\AccountResource;
use App\Candy\Frontend\Account\Requests\CreateRequest;
use App\Controllers\BaseController;

class AccountController extends BaseController
{
    public function index()
    {
        $accounts = request()->user()->accounts()->descendingById()->get();

        $isEmpty = $accounts->isEmpty();

        if ($isEmpty) {
            $this->raiseNothing();
        }

        return new AccountCollection($accounts);
    }

    public function show($id)
    {
        $account = request()->user()->accounts()->find($id);

        if (!$account) {
            $this->raiseNothing();
        }

        return AccountResource::make($account);
    }

    public function create(CreateRequest $request)
    {
        $data = ['name' => $request->name, 'address' => $request->address];

        $account = $request->user()->accounts()
            ->create($data);

        return AccountResource::make($account);
    }
}
