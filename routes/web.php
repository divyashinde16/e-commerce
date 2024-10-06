<?php

use Illuminate\Support\Facades\Route;

// Home Route
Route::get('/', function () {
    return view('home');
});
Route::get('/login',function()
{
    return view('login');
});