<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastrarProdutoController;

Route::get('/', function () {
    return view('welcome');
});

// rota de criação do produto
Route::get('/form',[CadastrarProdutoController::class,'show']);
Route::post('/cadastrar-produto',[CadastrarProdutoController::class,'create']);

// rota de leitura do produto
route::get('/show-produto',[CadastrarProdutoController::class,'index']);
route::get('/show-produto/{id}',[CadastrarProdutoController::class,'show']);

// rota de edição do produto
route::get('/editar-produto/{id}',[CadastrarProdutoController::class,'updateForm']);
route::post('/editar-produto/{id}',[CadastrarProdutoController::class,'update']);

// rota para deletar produto
route::get('/deletar-produto-form/{id}',[CadastrarProdutoController::class,'formDelete']);
route::delete('/deletar-produto/{id}',[CadastrarProdutoController::class,'delete']);
