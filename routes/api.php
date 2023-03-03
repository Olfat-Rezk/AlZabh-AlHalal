<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\categoryContoller;
use App\Http\Controllers\Api\loginController;

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

Route::apiResource('/category','categoryContoller');
//Route::post('/category/store',[categoryContoller::class,'store']);
Route::post('login',[loginController::class,'login']);
Route::post('login',[loginController::class,'login']);
Route::apiResource('/altaqte3','Altaqte3Controller');
