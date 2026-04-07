<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Clientes;

class AdminClientesController extends Controller
{
    public function index()
    {
        $clientes = Clientes::get();

        return view("admin.clientes.index",compact("clientes"));
    }

    public function cadastro()
    {
        $clientes = Clientes::get();

        return view("admin.clientes.cadastro",compact("clientes"));
    }

    public function salvar(Request $request)
    {
        $c = new Clientes();

        $c->nome = $request->nome;
        $c->email = $request->email;
        $c->data = $request->data;
        $c->perfil = $request->perfil;
        $c->status = 1;

        $c->save();

        return redirect("admin/clientes");
    }

    public function excluir($id)
    {
        $c = Clientes::findOrFail($id);
        $c->delete();

        return redirect()->back();
    }
}



