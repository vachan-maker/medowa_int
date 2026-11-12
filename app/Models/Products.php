<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $fillable = [
    'name',
    'description',
    'category_id',
    'price',
    'image_url',
    'is_featured',
    'tagline',
    'is_new'
    ];
}
