<?php

namespace App\Candy\Frontend\Game;

use App\Candy\Frontend\Game\Resources\CardResource;
use App\Controllers\BaseController;
use App\Models\GameCard;

class GameController extends BaseController
{
    public function cards()
    {
        $cards = GameCard::filter()->get(); // Can be enabled or disabled

        $isEmpty = $cards->isEmpty();

        if ($isEmpty) {
            $this->raiseNothing();
        }

        return CardResource::collection($cards);
    }
}
