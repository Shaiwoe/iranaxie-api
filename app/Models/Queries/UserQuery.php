<?php

namespace App\Models\Queries;

use Illuminate\Support\Facades\DB;

abstract class UserQuery
{
    public static function getCountOfOrders($id)
    {
        return DB::selectOne('SELECT SUM( IF( status = "pending", 1, 0 ) ) as pending, SUM( IF( status = "paid", 1, 0 ) ) as paid, SUM( IF( status = "completed", 1, 0 ) ) as completed FROM exchanges WHERE user_id = :id', ['id' => $id]);
    }
}
