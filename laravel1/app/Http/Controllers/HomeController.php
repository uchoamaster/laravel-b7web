<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    public function __invoke()
    {
        return view('login');
    }

    public function register(Request $request) {
        // if($request->filled('full-name')){
        //     echo "tem nome";
        // }else {
        //     echo "n tem nome";
        // }
        // $data = $request->all();
        // print_r($data);
        $nome = "Carlos";
        $idade = 90;
        $data = [
            'nome'=>$nome,
            'idade'=>$idade
        ];
        return view('admin.register', $data);
    }
}
