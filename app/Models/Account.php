<?php

namespace App\Models;

use App\Models\Queries\AccountQuery;

class Account extends BaseModel
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getSlpAttribute()
    {
        return AccountQuery::getTodaySlp($this->id);
    }

    public function getRankAttribute()
    {
        return AccountQuery::getTodayRank($this->id);
    }
}
