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

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
#Route::get('/', 'App\Http\Controllers\PrincipalController@principal');

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobre-nos');

Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');

Route::get('/login', function () {return 'login';})->name('site.login');

Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {return 'clientes';})->name('app.clientes');
    Route::get('/fornecedores', function () {return 'fornecedores';})->name('app.fornecedores');
    Route::get('/produtos', function () {return 'produtos';})->name('app.produtos');
}); 

Route::get('/rota1', function () {
    echo '1';   
})->name('site.rota1');

Route::get('/rota2', function () {
    return redirect()->route('site.rota1');
})->name('site.rota2');

#Route::redirect('rota2', 'rota1');

Route::fallback(function () {
    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ir para a página inicial';
});