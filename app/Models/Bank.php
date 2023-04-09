<?php

namespace App\Models;

class Bank extends BaseModel
{
    public function icon()
    {
        return $this->belongsTo(Icon::class);
    }
}
