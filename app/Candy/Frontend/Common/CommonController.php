<?php

namespace App\Candy\Frontend\Common;

use App\Candy\Frontend\Common\Resources\NetworkResource;
use App\Candy\Frontend\Common\Resources\WalletResource;
use App\Candy\Frontend\Common\Resources\BankResource;
use App\Candy\Frontend\Common\Resources\CoinResource;
use App\Controllers\BaseController;
use App\Models\Network;
use App\Models\Wallet;
use App\Models\Bank;
use App\Models\Coin;

class CommonController extends BaseController
{
    public function banks()
    {
        $banks = Bank::all(); // Can be enabled or disabled

        $isEmpty = $banks->isEmpty();

        if ($isEmpty) {
            $this->raiseNothing();
        }

        return BankResource::collection($banks);
    }

    public function coins()
    {
        $coins = Coin::all(); // Can be enabled or disabled

        $isEmpty = $coins->isEmpty();

        if ($isEmpty) {
            $this->raiseNothing();
        }

        return CoinResource::collection($coins);
    }

    public function coin($id)
    {
        $coin = Coin::find($id); // Can be enabled or disabled

        if (!$coin) {
            $this->raiseNothing();
        }

        return CoinResource::make($coin);
    }

    public function networks($id)
    {
        $coin = Coin::find($id); // Can be enabled or disabled

        if (!$coin) {
            $this->raiseNothing();
        }

        $networks = $coin->networks()->get();

        $isEmpty = $networks->isEmpty();

        if ($isEmpty) {
            $this->raiseNothing();
        }

        return NetworkResource::collection($networks);
    }

    public function network($id)
    {
        $network = Network::find($id); // Can be enabled or disabled

        if (!$network) {
            $this->raiseNothing();
        }

        return NetworkResource::make($network);
    }

    public function wallets($id)
    {
        $network = Network::find($id); // Can be enabled or disabled

        if (!$network) {
            $this->raiseNothing();
        }

        $wallets = $network->wallets()->doesntHave('user')->get(); // Can be enabled or disabled

        $isEmpty = $wallets->isEmpty();

        if ($isEmpty) {
            $this->raiseNothing();
        }

        return WalletResource::collection($wallets);
    }

    public function wallet($id)
    {
        $wallet = Wallet::doesntHave('user')->find($id); // Can be enabled or disabled

        if (!$wallet) {
            $this->raiseNothing();
        }

        return WalletResource::make($wallet);
    }
}
