<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BootcampController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ReviewsController;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

//Clase route: Encargada de rutas
//Metodo apiresourse: permite crear rutas de cambio para una entidad

Route::apiResource('bootcamps', BootcampController::class);
Route::apiResource('courses', CoursesController::class);
Route::apiResource('reviews', ReviewsController::class);
