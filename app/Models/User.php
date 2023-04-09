<?php

namespace App\Models;

class User extends BaseModel
{
    use Events\TokenEvent;

    public function tokens()
    {
        return $this->hasMany(Token::class);
    }

    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }

    public function getLatestProfileAttribute()
    {
        return $this->hasOne(Profile::class)
            ->descendingById()
            ->first();
    }

    public function cards()
    {
        return $this->hasMany(Card::class);
    }

    public function accounts()
    {
        return $this->hasMany(Account::class);
    }

    public function wallets()
    {
        return $this->hasMany(Wallet::class);
    }

    public function exchanges()
    {
        return $this->hasMany(Exchange::class);
    }

    public function generate()
    {
        $this->token = generateChars(20);
    }
}
