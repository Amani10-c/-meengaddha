<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategoryGameController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\QuestionController;
use App\Models\CategoryGame;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post("register", [AuthController::class, 'register']);
Route::post("login", [AuthController::class, 'login']);
Route::post("logout", [AuthController::class, 'logout'])->middleware('auth:sanctum');



Route::prefix('category')->controller(CategoryController::class)->group(function (){
Route::get('exclusiveCategory',  'index');
Route::post('updatePhoto/{category}',  'updatePhoto');

});

Route::prefix('collection')->controller(CollectionController::class)->group(function (){
Route::get('/',  'index');

});

Route::prefix('group')->controller(GroupController::class)->group(function (){
Route::post('creationGroup','store')->middleware('auth:sanctum');

});


Route::prefix('categoryGames')->controller(CategoryGameController::class)->group(function () {
    Route::get('mostSelectedCategory', 'index');

});

Route::prefix('games')->controller(GameController::class)->group(function () {
    Route::post('/{id}', 'show');

});

Route::prefix('questions')->controller(QuestionController::class)->group(function () {
    Route::post('/', 'question');

});