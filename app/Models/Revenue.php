<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;

class Revenue extends Model
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
    protected $table = 'Revenue';

    public static function getData()
    {
        return DB::select('SELECT SUM(amount) AS Total_Revenue, (SELECT SUM(amount) AS value_sum FROM Cost) AS Total_Cost, (SELECT SUM(amount) 
        AS value_sum FROM Profit) as Total_Profit, (SELECT SUM(amount) AS value_sum FROM Goal) 
        AS Goal FROM Revenue');
    }

    
}