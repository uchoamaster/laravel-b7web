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
        $lista = [
            ['nome'=>'farinha de trigo', 'qt'=> 2],
            ['nome'=>'ovos', 'qt'=> 4],
            ['nome'=>'manteiga', 'qt'=> '2 colheres de sopa'],
            ['nome'=>'leite', 'qt'=> '180ml'],
            ['nome'=>'essencia de baunilha', 'qt'=> '10ml'],
            ['nome'=>'óleo', 'qt'=> '100ml'],
            ['nome'=>'fermento', 'qt'=> '15 gramas']
        ];
        $nome = "Carlos";
        $idade = 90;
        $data = [
            'nome'=>$nome,
            'idade'=>$idade,
            'lista'=>$lista
        ];


        return view('admin.register', $data);
    }
}
