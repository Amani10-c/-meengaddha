<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ResetPasswordController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post("register", [AuthController::class,'register']);
Route::post("login", [AuthController::class,'login']);
Route::post("logout", [AuthController::class,'logout'])->middleware('auth:sanctum');
Route::post('CreateContact', [ContactUsController::class, 'CreateContact']);
Route::get('ContactShow', [ContactUsController::class, 'ContactShow']);
Route::put('update', [AuthController::class,'update'])->middleware('auth:sanctum');
//Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLink']);
Route::post('reset', [AuthController::class, 'reset'])->middleware('auth:sanctum');




Route::get('category',[CategoryController::class,'index']);
Route::post('updatePhoto/{category}',[CategoryController::class,'updatePhoto']);


Route::get('collection',[CollectionController::class,'index']);


Route::post('creationGroup',[GroupController::class,'creationGroup'])->middleware('auth:sanctum');
