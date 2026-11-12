<?php

use App\Models\Accessory;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $categories = Categories::where('is_featured', true)->get();
    $latestProducts = Products::where('is_new', true)
        ->where('is_featured', true)
        ->latest()
        ->get();
    $accessories = Accessory::where('is_featured',true)->get();

    return view('index', compact('categories', 'latestProducts','accessories'));
});
