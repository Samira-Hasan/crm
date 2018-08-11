<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Tables extends Model
{

    protected $table = 'Tables';

    public static function createTables()
    {
        return DB::select("SELECT * FROM Tables ORDER BY id ASC");
    }
}