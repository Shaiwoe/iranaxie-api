<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{
    use Scopes\Descending, Scopes\Ascending, Scopes\TimeDate, Events\RefreshEvent;

    public $timestamps = false;
}
