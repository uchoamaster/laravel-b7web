<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConfigController extends Controller
{
    public function config(Request $request) {
        // $url = $request->url();
        // echo "URL: ".$url;
        // $method = $request->method();
        // echo "METODO: ".$method;
        return view('config');
    }

    public function info() {
        echo 'Configurações Info vindo do ConfigController';
    }

    public function permissoes() {
        echo 'Configurações Permissoes vindo do ConfigController';
    }
}
