<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PrincipalController::class, 'home']);
Route::get('/servicios', [PrincipalController::class, 'services']);
Route::get('/acerca', [PrincipalController::class, 'about']);
Route::get('/portafolio', [PrincipalController::class, 'portfolio']);
Route::get('/contacto', [PrincipalController::class, 'contact']);

Route::get('/xvpaquete1', [PrincipalController::class, 'paquete1xv']);
Route::get('/xvpaquete2', [PrincipalController::class, 'paquete2xv']);
Route::get('/xvpaquete3', [PrincipalController::class, 'paquete3xv']);


Route::get('/planes', [PrincipalController::class, 'plans']);

Route::post('/EnviarCorreo', [PrincipalController::class, 'enviocorreo']);
