<?php

namespace App\Models;

class Network extends BaseModel
{
    public function coin()
    {
        return $this->belongsTo(Coin::class);
    }

    public function wallets()
    {
        return $this->hasMany(Wallet::class);
    }
}
