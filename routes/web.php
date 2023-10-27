<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('user.index');
})->name('dashboard');

Route::get('/about',[\App\Http\Controllers\user\AboutController::class,'index'])->name('about-page');
Route::get('/course',[\App\Http\Controllers\user\CourseController::class,'index'])->name('course');
Route::get('/course/details',[\App\Http\Controllers\user\CourseController::class,'courseDetails'])->name('course-details');
Route::get('/staff',[\App\Http\Controllers\user\StaffController::class,'index'])->name('staff');
Route::get('/online/apply',[\App\Http\Controllers\user\ApplyController::class,'indexOnlineApply'])->name('online-apply');
Route::get('/apply',[\App\Http\Controllers\user\ApplyController::class,'index'])->name('apply');
Route::get('/blog',[\App\Http\Controllers\user\BlogController::class,'index'])->name('blog');
Route::get('/contact',[\App\Http\Controllers\user\ContactController::class,'index'])->name('contact');
