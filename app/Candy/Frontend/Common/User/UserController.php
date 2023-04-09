<?php

namespace App\Candy\Frontend\Common\User;

use App\Candy\Frontend\Common\User\Resources\WalletResource;
use App\Candy\Frontend\Common\User\Resources\CardResource;
use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function wallets($id)
    {
        $wallets = request()->user()->wallets()->whereNetworkId($id)->get();

        $isEmpty = $wallets->isEmpty();

        if ($isEmpty) {
            $this->raiseNothing();
        }

        return WalletResource::collection($wallets);
    }

    public function wallet($id)
    {
        $wallet = request()->user()->wallets()->find($id);

        if (!$wallet) {
            $this->raiseNothing();
        }

        return WalletResource::make($wallet);
    }

    public function cards()
    {
        $cards = request()->user()->cards()->get();

        $isEmpty = $cards->isEmpty();

        if ($isEmpty) {
            $this->raiseNothing();
        }

        return CardResource::collection($cards);
    }
}
