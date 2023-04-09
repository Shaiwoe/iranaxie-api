<?php

namespace App\Models;

class Category extends BaseModel
{
    public function icon()
    {
        return $this->belongsTo(Icon::class);
    }
}
