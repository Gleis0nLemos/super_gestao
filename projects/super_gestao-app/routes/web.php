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

Route::get('/login', function () {return 'login';});

Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {return 'clientes';});
    Route::get('/fornecedores', function () {return 'fornecedores';});
    Route::get('/produtos', function () {return 'produtos';});
});




