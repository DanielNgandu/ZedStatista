<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'indicator_name', 'x_value', 'y_value',
    ];


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'stats';
}
