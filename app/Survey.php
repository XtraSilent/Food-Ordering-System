<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Survey extends Model
{
    protected $fillable = [
        'topic', 'name','email','comment'
    ];
}
