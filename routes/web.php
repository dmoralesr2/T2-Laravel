<?php

use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\TipoSangreController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return 'Bienvenido porfavor ingresa a /estudiantes';
});
Route::resource('/estudiantes', EstudianteController::class);
Route::resource('/tipos_sangre', TipoSangreController::class);
