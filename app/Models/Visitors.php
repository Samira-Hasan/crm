<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;

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
        return DB::select('SELECT browser_id, COUNT(user_id) AS Value, Browser.name FROM Visitors LEFT JOIN 
        Browser ON Visitors.browser_id=Browser.id  WHERE Browser.name <> null GROUP BY browser_id ORDER BY browser_id ASC');


    }
}