<?php

use Illuminate\Support\Facades\Route;

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

// dynamic route

Route::get('/users/{id}/{name}', function ($id, $name){
    return "This is user " .$name. " with id " .$id;
});



Route::get('/', function () {
    return view('welcome');
});

// index
Route::get('/index',[\App\Http\Controllers\PagesController::class, 'index']);

// about
Route::get('/about', [\App\Http\Controllers\PagesController::class, 'about']);

// services
Route::get('/services', [\App\Http\Controllers\PagesController::class, 'services']);










Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
