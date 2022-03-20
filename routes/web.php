<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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

Route::get('/', [PageController::class,"index"])->name("index");

Route::get('/about', function () {
    return view('about');
})->name("about");

Route::get('/contact', function () {
    return view('contact');
})->name("contact");





Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware("auth")->group(function (){
    Route::resource("/car",CarController::class);
    Route::resource("/blog",BlogController::class);
    Route::get("profile",[UserController::class,'index'])->name("user-index");
    Route::get("/profile/{user}/edit",[UserController::class,'edit'])->name("user-edit");
    Route::put("/update-profile/{user}",[UserController::class,"update"])->name("user-update");


});
