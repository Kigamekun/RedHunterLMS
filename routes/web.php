<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::middleware(['auth'])->group(function () {


    Route::get('/course', [CourseController::class, 'index'])->name('course.index');
    Route::get('/detailClass/{id}', [CourseController::class, 'detailClass'])->name('detailClass');
    Route::get('/detailCourse/{id}', [CourseController::class, 'detailCourse'])->name('detailCourse');
    Route::get('/downloadBook/{id}', [CourseController::class, 'downloadBook'])->name('downloadBook');
});



Route::get('/createClass', [AdminController::class, 'createClass'])->name('createClass');

Route::post('/storeClass', [AdminController::class, 'storeClass'])->name('storeClass');

require __DIR__.'/auth.php';
