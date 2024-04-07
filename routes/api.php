<?php

use App\Http\Controllers\ParameterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::group(['prefix' => 'v1', 'as' => 'v1.'], function () {
//    Route::post('/parameters', [ParameterController::class, 'store']);
//    // роут для конкретного параметра никому не нужен. Нужен фильтр по типу запериод
//    Route::get('/parameters/{parameter}', [ParameterController::class, '']);
//});

Route::apiResource('parameters', ParameterController::class);
