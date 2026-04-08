<?php

namespace App\Http\Controllers;

use App\Models\Produtos;

class WebsiteController extends Controller
{
    public function home()
    {
        $produtos = [
        ["nome"=>"Xit","preco"=>1000000.00,"categoria"=>"Martado"],
        ["nome"=>"Rafael","preco"=>155.00,"categoria"=>"César"],
        ["nome"=>"Free Fire","preco"=>150.00,"categoria"=>"Martado"],
        ["nome"=>"Naruto","preco"=>90.00,"categoria"=>"César"],
        ["nome"=>"Naruto","preco"=>90.00,"categoria"=>"César"]
        ];

        $sql = "SELECT * FROM produtos";
        $produtos = Produtos::get();
        return view("home",compact("produtos"));
    }

    public function produtos()
    {
        $produtos = array("Tenis","Bone","Camisa","Bermuda");

        return view("produtos",compact("produtos"));
    }

    public function catalogo()
    {
        $produtos = [
        ["nome"=>"Xit","preco"=>1000000.00,"categoria"=>"Martado"],
        ["nome"=>"Rafael","preco"=>155.00,"categoria"=>"César"],
        ["nome"=>"Free Fire","preco"=>150.00,"categoria"=>"Martado"],
        ["nome"=>"Naruto","preco"=>90.00,"categoria"=>"César"],
        ["nome"=>"Papel de Parede do Naruto","preco"=>110.00,"categoria"=>"César"],
        ["nome"=>"Celular Quebrado","preco"=>230.00,"categoria"=>"César"],
        ["nome"=>"Conjunto Nike Azul","preco"=>150.00,"categoria"=>"Martado"],
        ["nome"=>"Capa Bizarro","preco"=>-100.00,"categoria"=>"???"],
        ["nome"=>"Felca Africano","preco"=>5000.00,"categoria"=>"César"],
        ["nome"=>"Mano Escrito","preco"=>1000.00,"categoria"=>"César"],
        ["nome"=>"Google Creme","preco"=>34000000000.00,"categoria"=>"César"],
        ["nome"=>"MacDonold","preco"=>2500000.00,"categoria"=>"César"],
        ["nome"=>"Cruzeiro","preco"=>1300000000.00,"categoria"=>"César"]
        ];

        return view("catalogo",compact("produtos"));
    }
}