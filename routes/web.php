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
Route::get('/adicionar-comentario', [ToPerdidoController::class, 'adicionarComentario'])->name('adicionar-comentario');
Route::post('/adicionar-resposta', [ToPerdidoController::class, 'adicionarResposta'])->name('adicionar-resposta');
Route::post('/adicionar-imagem', [ToPerdidoController::class, 'adicionarImagem'])->name('adicionar-imagem');

Route::get('/cadastro', function(){
    return view('auth.register');
})->name('cadastro');


Route::get('/mapa', function(){
    return view('mapa');
})->name('mapa');
/** 
 * {param} => parametro obrigatorio
 * {param?} => parametro opcional
 * 
 * 
*/
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('index');
    })->name('dashboard');
});
