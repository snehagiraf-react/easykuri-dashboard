<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
        'name',
        'description',
        'quantity',
        'price',
    ];

    protected $table = 'task';

    public $timestamps = true;

}

