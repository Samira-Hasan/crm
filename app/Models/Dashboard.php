<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;


class Dashboard extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'product_id', 'amount', 'month',
    ];
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Dashboard';

    public static function createMembers()
    {
        return DB::table('Dashboard')->avg('members');
    }

    public static function getlikes()
    {
        return DB::select('SELECT AVG(`likes`) AS likes FROM `Dashboard` WHERE MOD(`likes`, 2) = 0');
    }

    public static function createTraffic()
    {
        return DB::select('SELECT (COUNT(`traffic`)/AVG(traffic)*100) AS traffic FROM `Dashboard`');
    }
    
}