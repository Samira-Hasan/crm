<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class order extends Model
{

    protected $table = 'Inventory';

    public static function createOrder()
    {
        return DB::select("SELECT * FROM ordertable ORDER BY id ASC");
    }
}