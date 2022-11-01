<?php

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

use App\Http\Controllers\ToPerdidoController;
use App\Http\Controllers\CadastroController;

Route::get('/', [ToPerdidoController::class, 'index'])->name('index');
Route::post('/local', [ToPerdidoController::class, 'buscaLocal'])->name('local');
Route::get('/local/{cidade?}', [ToPerdidoController::class, 'locais'])->name('locais');
Route::get('/busca/{cidade}', [ToPerdidoController::class, 'buscaCidades']);
Route::get('/detalhes/{local}', [ToPerdidoController::class, 'detalhes'])->name('detalhes');
Route::get('/informacoes/{local}', [ToPerdidoController::class, 'buscaLocaisAutocomplete'])->name('informacoes');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/mapa', function(){
    return view('mapa');
})->name('mapa');
/** 
 * {param} => parametro obrigatorio
 * {param?} => parametro opcional
 * 
 * 
*/