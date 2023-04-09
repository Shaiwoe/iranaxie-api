<?php

namespace App\Models;

class Coin extends BaseModel
{
    public function icon()
    {
        return $this->belongsTo(Icon::class);
    }

    public function networks()
    {
        return $this->hasMany(Network::class);
    }
}
