<?php
use DB;
namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Visitors extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'visitor_id', 'browser_id',
    ];
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'Visitors';

    public static function createVisitors()
    {
        return DB::select('SELECT `browser_id`,COUNT(`user_id`) FROM `Visitors` GROUP BY `browser_id` ORDER BY 
        `browser_id` ASC');
    }
}