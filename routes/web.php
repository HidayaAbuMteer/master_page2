<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;
// Route::get('/', function () {
//     return view('pages.main');
// });
// Route::get('/about', function () {
//     return view('pages.about');
// });
// Route::get('/course', function () {
//     return view('pages.course');
// });
Route::resource('students', StudentsController::class);
Route::get('/', [StudentsController::class, 'index'])->name('students.index');
