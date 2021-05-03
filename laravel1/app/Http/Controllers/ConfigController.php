<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function config() {
        return view('config');
    }

    public function info() {
        echo 'Configurações Info vindo do ConfigController';
    }

    public function permissoes() {
        echo 'Configurações Permissoes vindo do ConfigController';
    }
}
