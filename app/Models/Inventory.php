<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Inventory extends Model
{

    protected $table = 'Inventory';

    public static function createSum()
    {
        return DB::select("SELECT SUM(inventory) as 'Val1', SUM(mentions) as 'Val2',
     SUM(downloads) as 'Val3', SUM(messages) as 'Val4' FROM inventorysystem");
    }
}