<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeriatriaController;
use App\Http\Controllers\KardexController;
use App\Http\Controllers\MedicinaController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\EvolucionController;
use App\Http\Controllers\ValoracionController;

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