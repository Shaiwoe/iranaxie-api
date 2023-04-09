<?php

namespace App\Models;

class Icon extends BaseModel
{
    public function getAbsoluteAddressAttribute()
    {
        return url($this->address);
    }
}
