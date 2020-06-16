<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    function __construct()
    {
        $this->middleware('primeiro');
    }
    function index(){
        return
            "<h3>Lista de Usuario</h3>
            <ul>
                <li>João</li>
                <li>Maria</li>
                <li>Pedro</li>
            </ul>";
    }
}
