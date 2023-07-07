<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{

    protected $fillable = [
        'title',
        'producer',
        'number_of_doors'
    ];
}
