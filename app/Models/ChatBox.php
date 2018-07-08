<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;


class ChatBox extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'user_id', 'messege', 'is_viewed',
    ];
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ChatBox';
    
    public static function createChatBox()
    {
         return DB::table('ChatBox')
            ->leftJoin('users', 'users.id', '=', 'ChatBox.user_id')
            ->take(10)
            ->get()->toArray();
    }
    
}