<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.main');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/course', function () {
    return view('pages.course');
});
