<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollectionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('category',[CategoryController::class,'index']);
Route::post('updatePhoto/{category}',[CategoryController::class,'updatePhoto']);


Route::get('collection',[CollectionController::class,'index']);
