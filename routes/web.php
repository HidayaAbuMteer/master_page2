<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('component.about');
});
Route::get('/course', function () {
    return view('component.course');
});
