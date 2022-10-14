<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class,'principal'])->name('site.index');
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class,'sobreNos'])->name('site.sobrenos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class,'contato'])->name('site.contato');
Route::get('/login', function(){ return 'Login';})->name('site.login');

// Privada

Route::get('/teste/{p1}/{p2}',[\App\Http\Controllers\TesteController::class,'teste'])->name('site.teste');

Route::prefix('app')->group(function(){
    Route::get('/clientes', function(){ return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', [\App\Http\Controllers\FornecedorController::class,'index'] )->name('app.fornecedores');
    Route::get('/produtos',function(){ return 'Produtos';})->name('app.produtos');
});

// Route::get('/rota1', function(){
//     echo 'Rota1';
//     })->name('site.rota1');

// Route::get('/rota2', function(){
//      return redirect()->route('site.rota1');
//     })->name('site.rota2');

//Route::redirect('/rota2','/rota1');

Route::fallback(function(){
    echo 'A Rota acessada nao existe,
        <a href="/"> clique aqui</a> para ser direcionado a pagina principal';
});
