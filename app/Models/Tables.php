<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Tables extends Model
{

    protected $table = 'Tables';

    public static function createTables()
    {
        

        return DB::table('Tables')
               ->select('*')
               ->orderBy('id', 'asc')
               ->paginate(15);
               
    }
    public static function createTables2()
    {
        return DB::table('Tables')
               ->select('*')
               ->orderBy('id', 'DESC')
               ->paginate(15);
               
    }
    
}