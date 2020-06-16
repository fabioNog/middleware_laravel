<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    private $prod = ["Televisão","Microondas","Geladeira"];
    function index(){
        echo "<h3>Produtos</h3>";
        echo "<ol>";
        foreach($this->prod as $p){
            echo "<li>" . $p . "</li>";
        }
        echo "</ol>";
    }
}
