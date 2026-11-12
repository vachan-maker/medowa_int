<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    protected $fillable = [
        'name',
        'string_color',
        'price',
        'is_new',
        'is_featured',
        'image_url'

    ];
}
