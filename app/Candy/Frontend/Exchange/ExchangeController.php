<?php

namespace App\Candy\Frontend\Exchange;

use App\Candy\Frontend\Exchange\Resources\ExchangeCollection;
use App\Candy\Frontend\Exchange\Resources\ExchangeResource;
use App\Candy\Frontend\Exchange\Requests\SellRequest;
use App\Candy\Frontend\Exchange\Requests\BuyRequest;
use App\Controllers\BaseController;
use App\Models\Network;
use App\Models\Coin;

class ExchangeController extends BaseController
{
    public function index()
    {
        $exchanges = request()->user()->exchanges()->descendingById()->filter()->get();

        $isEmpty = $exchanges->isEmpty();

        if ($isEmpty) {
            $this->raiseNothing();
        }

        return new ExchangeCollection($exchanges);
    }

    public function buy(BuyRequest $request)
    {
        $coin = Coin::whereId($request->coin_id)
            ->first();

        if (!$coin) {
            $this->raiseNothing();
        }

        $network = Network::whereId($request->network_id)
            ->first();

        if (!$network) {
            $this->raiseNothing();
        }

        $data = ['coin_id' => $request->coin_id, 'card_id' => $request->card_id, 'network_id' => $network->id, 'wallet_address' => $request->wallet_address, 'type' => 'buy', 'amount' => $request->amount, 'price' => $coin->buy_price, 'fee' => $network->fee, 'status' => 'pending'];

        $exchange = $request->user()->exchanges()
            ->create($data);

        return ExchangeResource::make($exchange);
    }

    public function sell(SellRequest $request)
    {
        $coin = Coin::whereId($request->coin_id)
            ->first();

        if (!$coin) {
            $this->raiseNothing();
        }

        $data = ['coin_id' => $request->coin_id, 'card_id' => $request->card_id, 'wallet_id' => $request->wallet_id, 'type' => 'sell', 'amount' => $request->amount, 'price' => $coin->sell_price, 'wallet_track' => $request->wallet_track, 'status' => 'pending'];

        $exchange = $request->user()->exchanges()
            ->create($data);

        return ExchangeResource::make($exchange);
    }
}
