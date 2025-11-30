<?php

use App\Http\Controllers\faculties\FacultyController;
use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('index');
});

Route::get('/add_student', function () {
    return view('add_student');
});

Route::get('/view_students', function () {
    return view('view_students');
});

Route::get('/add_batch', function () {
    return view('add_batch');
});

Route::get('/view_batches', function () {
    return view('view_batches');
});

Route::get('/add_faculty', function () {
    return view('add_faculty');
});

Route::post('/add_faculty', [FacultyController::class, "add_faculty"]);

Route::get('/view_faculties', [FacultyController::class, "view_faculties"]);



