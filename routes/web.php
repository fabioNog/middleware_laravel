<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Middleware\PrimeiroMiddleware;

Route::get('/usuarios','UsuarioController@index');
