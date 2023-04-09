<?php

namespace App\Models;

class Profile extends BaseModel
{
    public function getAbsolutePictureAttribute()
    {
        return url($this->picture);
    }
}
