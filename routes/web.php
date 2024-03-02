<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;


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



Route::get('/', [HomeController::class,'home']);

Route::prefix('/category')->group(function () { 
    Route::get('/food_beverage', [ProductController::class, 'foodAndBeverage']); 
    Route::get('/beauty_health', [ProductController::class, 'beautyAndHealth']); 
    Route::get('/home_care', [ProductController::class, 'homeCare']); 
    Route::get('/baby_kid', [ProductController::class, 'babyKid']); 
}); 


Route::get('/sales', [SalesController::class,'sales']);
Route::get('/user/{id}/name/{name}', [UserController::class, 'profil']);