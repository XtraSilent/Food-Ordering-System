<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Jobapp extends Model
{
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','phone','address','position',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
}
