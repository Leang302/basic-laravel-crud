<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/user/{id}", function ($id) {
    return "User ID: " . $id;
});
