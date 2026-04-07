<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produtos::get();

        return view("admin.produtos.index",compact("produtos"));
    }

    public function salvar(Request $request)
    {
        $p = new Produtos();

        $p->nome = $request->nome;
        $p->fkIdCategoria = $request->categorias;
        $p->preco = $request->preco;
        $p->estoque = $request->estoque;
        $p->sku = $request->sku;
        $p->status = 1;
        $p->descricao = $request->descricao;

        $p->save();

        echo "Dados salvo com sucesso!";
        //return redirect()->back();
    }

    public function excluir($id)
    {
        $p = Produto::findOrFail($1);
        $p->delete();

        return redirect()->back();
    }
}


