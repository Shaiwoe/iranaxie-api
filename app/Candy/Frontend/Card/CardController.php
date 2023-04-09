<?php

namespace App\Candy\Frontend\Card;

use App\Candy\Frontend\Card\Resources\CardCollection;
use App\Candy\Frontend\Card\Resources\CardResource;
use App\Candy\Frontend\Card\Requests\CreateRequest;
use App\Controllers\BaseController;
use App\Models\Card;

class CardController extends BaseController
{
    public function index()
    {
        $cards = request()->user()->cards()->descendingById()->get();

        $isEmpty = $cards->isEmpty();

        if ($isEmpty) {
            $this->raiseNothing();
        }

        return new CardCollection($cards);
    }

    public function show($id)
    {
        $card = request()->user()->cards()->find($id);

        if (!$card) {
            $this->raiseNothing();
        }

        return CardResource::make($card);
    }

    public function create(CreateRequest $request)
    {
        $data = ['bank_id' => $request->bank_id, 'name' => $request->name, 'card' => $request->card, 'account' => $request->account, 'sheba' => $request->sheba, 'status' => 'pending'];

        $card = $request->user()->cards()
            ->create($data);

        return CardResource::make($card);
    }
}
