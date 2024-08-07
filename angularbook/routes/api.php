<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group(['prefix' => 'v1', 'middleware' => 'cors'], function(){
    Route::resource('users', UserController::class);
});

/*Route::prefix('v1')->middleware('auth:sanctum')->controller(UserController::class)->group(function () {
    Route::get('users', 'index');
});*/
