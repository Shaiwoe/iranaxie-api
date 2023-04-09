<?php

namespace App\Models;

class Exchange extends BaseModel
{
    use \PG\Filter\Filter;

    public function getFilters()
    {
        return ['card' => Filters\Exchange\Card::class];
    }

    public function coin()
    {
        return $this->belongsTo(Coin::class);
    }

    public function card()
    {
        return $this->belongsTo(Card::class);
    }

    public function network()
    {
        return $this->belongsTo(Network::class);
    }

    public function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }

    public function getLinkAttribute()
    {
        return url('candy/frontend/payment/exchange/purchase', ['id' => $this->id]);
    }
}
