<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produtos;

class AdminProdutosController extends Controller
{
    public function index($id=null)
    {
        $produtos = Produtos::get();

        $produto = null;

        if($id){
            $produto = Produtos::findOrFail($id);
        }

        return view("admin.produtos.index",compact("produtos","produto"));
    }

    public function salvar(Request $request)
    {

        if($request->id){
            $p = Produtos::find($request->$id);
        } else {
            $p = new Produtos();
            $p->status = 1;
        }

        $p->nome = $request->nome;
        $p->fkIdCategoria = $request->categoria;
        $p->preco = $request->preco;
        $p->estoque = $request->estoque;
        $p->sku = $request->sku;
        $p->status = 1;
        $p->descricao = $request->descricao;

        $p->save();

        return redirect()->back();
    }

    public function excluir($id)
    {
        $p = Produto::findOrFail($id);
        $p->delete();

        return redirect()->back();
    }
}