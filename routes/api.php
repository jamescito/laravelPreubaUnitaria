<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ClienteController;
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
Route::post('cliente',[ClienteController::class,'store']);
Route::get('cliente',[ClienteController::class,'index']);
Route::put('clientes/{cliente}',[ClienteController::class,'update']);
Route::delete('clientes/{cliente}',[ClienteController::class,'destroy']);
//Route::put('estudiantes/{estudiante}',[EstudianteController::class,'update']);
/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
