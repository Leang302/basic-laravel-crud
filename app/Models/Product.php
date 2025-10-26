<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //we use this so that user cannot assign directly to field id, crreated_at, updated_at..
    protected $fillable = ['name', 'price'];
}
