<?php

use App\Models\Categories;
use App\Models\Products;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $categories = Categories::all();
    $latestProducts = Products::where('is_new', true)
        ->where('is_featured', true)
        ->latest()
        ->get();

    return view('index', compact('categories', 'latestProducts'));
});
