<?php

use App\Http\Controllers\userController;
use App\Http\Controllers\watchSellerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/details" , [userController::class , "getProductWithUser"] );
Route::get("/seller" , [watchSellerController::class , "getWatch"] );
Route::get("/watch" , [watchSellerController::class , "getSeller"] );