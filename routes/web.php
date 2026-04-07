<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\Admin\AdminProdutosController;
use App\Http\Controllers\Admin\AdminController;

Route::get('/', [WebsiteController::class, 'home']);

Route::get('/rafael', function () {
    return view("contato");
});

Route::get('/produto', [WebsiteController::class, 'produtos']);
Route::get('/catalogo', [WebsiteController::class, 'catalogo']);
Route::get('/checkout', [WebsiteController::class, 'checkout']);
Route::get('/carrinho', [WebsiteController::class, 'carrinho']);
Route::get('/termos', [WebsiteController::class, 'termos']);
Route::get('/contato', [WebsiteController::class, 'contato']);

Route::get('/admin', [AdminController::class, 'home']);
Route::get('/admin/produtos', [AdminProdutosController::class, 'index']);
Route::post('/admin/produtos/salvar', [AdminProdutosController::class, 'salvar']);
Route::get('/admin/produtos/excluir/{id}', [AdminProdutosController::class, 'excluir']);
Route::get('/admin/pedidos', [AdminProdutosController::class, 'pedidos']);
Route::get('/admin/clientes', [AdminClientesController::class, 'clientes']);
Route::get('/admin/configuracoes', [AdminConfiguracoesController::class, 'configuracoes']);