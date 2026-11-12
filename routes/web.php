<?php

use App\Models\Categories;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $categories = Categories::all();
    return view('index',compact('categories'));
});
