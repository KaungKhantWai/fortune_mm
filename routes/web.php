<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/about', function () {
    return view('company.aboutUs');
});
