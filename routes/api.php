<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\PlatilloController;

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

Route::get('/login',[RestaurantController::class,'loginREST']);
Route::get('/validatoken',[RestaurantController::class,'validaToken']);

Route::middleware('auth:api')->group( function() {
    Route::get('/platillos',[PlatilloController::class,'listaREST']);
    Route::post('/platillos',[PlatilloController::class,'storeREST']);
});
