<?php

namespace App\Models\Queries;

use Illuminate\Support\Facades\DB;

abstract class AccountQuery
{
    public static function getDailySlp($id)
    {
        return DB::select('SELECT SUM(different_slp) as slp, YEAR(created) as year, MONTH(created) as month, DAY(created) as day FROM account_details WHERE account_id = :id GROUP BY year, month, day', ['id' => $id]);
    }

    public static function getMonthlySlp($id)
    {
        return DB::select('SELECT SUM(different_slp) as slp, YEAR(created) as year, MONTH(created) as month FROM account_details WHERE account_id = :id GROUP BY year, month', ['id' => $id]);
    }

    public static function getDailyRank($id)
    {
        return DB::select('SELECT ROUND(AVG(`rank`)) as `rank`, YEAR(created) as year, MONTH(created) as month, DAY(created) as day FROM account_details WHERE account_id = :id GROUP BY year, month, day', ['id' => $id]);
    }

    public static function getMonthlyRank($id)
    {
        return DB::select('SELECT ROUND(AVG(`rank`)) as `rank`, YEAR(created) as year, MONTH(created) as month FROM account_details WHERE account_id = :id GROUP BY year, month', ['id' => $id]);
    }

    public static function getTodaySlp($id)
    {
        return DB::selectOne('SELECT ( SELECT SUM(a.different_slp) FROM account_details a WHERE a.account_id = b.id AND DATE(created) = DATE(CURRENT_TIMESTAMP) ) as today, ( SELECT SUM(c.different_slp) FROM account_details c WHERE c.account_id = b.id AND DATE(created) = DATE( DATE_SUB(CURRENT_TIMESTAMP, INTERVAL 1 DAY) ) ) as yesterday FROM accounts b WHERE b.id = :id', ['id' => $id]);
    }

    public static function getTodayRank($id)
    {
        return DB::selectOne('SELECT ( SELECT ROUND( AVG(a.rank) ) FROM account_details a WHERE a.account_id = b.id AND DATE(created) = DATE(CURRENT_TIMESTAMP) ) as today, ( SELECT ROUND( AVG(c.rank) ) FROM account_details c WHERE c.account_id = b.id AND DATE(created) = DATE( DATE_SUB(CURRENT_TIMESTAMP, INTERVAL 1 DAY) ) ) as yesterday FROM accounts b WHERE b.id = :id', ['id' => $id]);
    }
}
