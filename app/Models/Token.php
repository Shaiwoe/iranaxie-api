<?php

namespace App\Models;

class Token extends BaseModel
{
    use Events\TokenEvent;

    public function generate()
    {
        $this->token = generateDigits(6);
    }
}
