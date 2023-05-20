<?php

use App\Http\Controllers\api\EstudianteController;
use App\Http\Controllers\api\CarreraController;
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
Route::get('/estudiante',[EstudianteController::class, 'index'])->name('estudiante');
Route::post('/estudiante',[EstudianteController::class, 'store'])->name('estudiante.store');
Route::delete('/estudiante/{estudiantes}',[EstudianteController::class, 'destroy'])->name('estudiante.destroy');



Route::get('/carrera',[CarreraController::class, 'index'])->name('carrera');
