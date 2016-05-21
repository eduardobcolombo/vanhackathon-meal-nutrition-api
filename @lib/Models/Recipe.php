<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{

    protected $fillable = [
        'name',
        'user_id',
        'visibility',
        'energy_total'
    ];

    protected $table = 'recipe';
}
