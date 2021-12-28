<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\RegisterController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//for google authentication
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

//for registrating user
Route::resource('register',RegisterController::class);

//as i am using laravel jetstream this route is used for redirecting user according to the role value
Route::get('redirects',[RegisterController::class,'redirection']);

//Admin routes for search ,view and dashboard
Route::get('views',[AdminController::class,'viewuser'])->name('viewuser');
Route::get('index',[AdminController::class,'index'])->name('adminsite');
Route::get('livesearch',[AdminController::class,'livesearch'])->name('livesearch');
