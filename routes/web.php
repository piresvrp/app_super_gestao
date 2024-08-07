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
Route::get('/', 'PrincipalController@principal')->name("site.index");
Route::get('/sobrenos', 'SobreNosController@sobrenos')->name("site.sobrenos");
Route::get('/contato', 'ContatoController@contato')->name("site.contato");
Route::post('/contato', 'ContatoController@contato')->name("site.contato");




Route::prefix('/app')->group(function (){
    Route::get('/login', function (){return 'login';})->name("app.login");
    Route::get('/clientes', function (){return 'clientes';})->name("app.clientes");
    Route::get('/fornecedores', "FornecedorController@index")->name("app.fornecedores");
    Route::get('/produtos', function (){return 'produtos';})->name("app.produtos");
});

Route::fallback(function(){
    echo 'A rota não existe. Clique <a href="' . route("site.index") . '">aqui</a> para retornar.';
});


Route::get("/teste/{p1}/{p2}", 'TesteController@teste')->name('teste');


