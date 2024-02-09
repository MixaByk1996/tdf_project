<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/import-excel', [App\Http\Controllers\Controller::class,'importExcel']);
Route::get('/import-prices', [App\Http\Controllers\Controller::class,'importPrices']);
Route::get('/export-excel', [App\Http\Controllers\Controller::class,'run_script']);
Route::post('/admin-login', [\App\Http\Controllers\UserAPIController::class, 'auth']);

Route::apiResource('series-api', \App\Http\Controllers\SeriesAPIController::class);
Route::apiResource('system-api', \App\Http\Controllers\SystemAPIController::class);
Route::apiResource('producer-api', \App\Http\Controllers\ProducerAPIController::class);
Route::apiResource('product-api', \App\Http\Controllers\ProductsAPIController::class);
Route::apiResource('categories-api', \App\Http\Controllers\CategoriesAPIController::class);
Route::apiResource('angle-api', \App\Http\Controllers\AngleAPIController::class);
