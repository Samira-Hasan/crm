<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class MonthlyVisitor extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'month', 'visitor_count',
    ];
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'MonthlyVisitor';

    
}