<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\api\MentalomeController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('/getData', [MentalomeController::class, 'getDataMentalome']);
Route::get('/getGene_ids', [MentalomeController::class, 'getGene_ids']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
