<?php

namespace App\Candy\Frontend\Wallet;

use App\Candy\Frontend\Wallet\Resources\WalletCollection;
use App\Candy\Frontend\Wallet\Resources\WalletResource;
use App\Candy\Frontend\Wallet\Requests\CreateRequest;
use App\Controllers\BaseController;

class WalletController extends BaseController
{
    public function index()
    {
        $wallets = request()->user()->wallets()->descendingById()->get();

        $isEmpty = $wallets->isEmpty();

        if ($isEmpty) {
            $this->raiseNothing();
        }

        return new WalletCollection($wallets);
    }

    public function show($id)
    {
        $wallet = request()->user()->wallets()->find($id);

        if (!$wallet) {
            $this->raiseNothing();
        }

        return WalletResource::make($wallet);
    }

    public function create(CreateRequest $request)
    {
        $data = ['network_id' => $request->network_id, 'name' => $request->name, 'address' => $request->address];

        $wallet = $request->user()->wallets()
            ->create($data);

        return WalletResource::make($wallet);
    }
}
