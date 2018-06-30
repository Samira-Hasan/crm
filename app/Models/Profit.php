<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Profit extends Model
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
    protected $table = 'Profit';

    
}