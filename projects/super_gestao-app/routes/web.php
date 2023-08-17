<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\ContatoController;

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

Route::get('/', [PrincipalController::class, 'principal']);
#Route::get('/', 'App\Http\Controllers\PrincipalController@principal');

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos']);

Route::get('/contato', [ContatoController::class, 'contato']);

Route::get('/contato/{nome}/{categoria_id}', function(string $nome=Desconhecido, int $categoria_id=1) {
    echo 'Estamos aqui '.$nome.'<br>';
    echo $categoria_id;
})->where('nome', '^[\p{L}\s-]+')->where('categoria_id', '[0-9]+'); # esta formatacao de nome permite usar caracteres especiais com UTF-8



