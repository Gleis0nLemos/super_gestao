<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return 'Hello World!';
});

Route::get('inicio', function() {
    $users = DB::select('select * from users');
    var_dump($users);
});

Route::get('/sobre-nos', function () {
    return 'Hello World!';
});

Route::get('/contato', function () {
    return 'Hello World!';
});


