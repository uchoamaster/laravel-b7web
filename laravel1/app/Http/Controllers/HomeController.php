<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\tarefa;


class HomeController extends Controller
{
    public function __invoke()
    {//pegando itens do banco com esse comando abaixo, sem query no banco ou select, etc.
        // $list = Tarefa::all();
        //pegando itens com where condicao se estão com o campo da tabela resolvido com valor 0 ( zerado)
        // $list = Tarefa::where('resolvido', 0)->get();
          //pegando o primeiro iten com where condicao que não foi resolvido  com valor 0 ( zerado)
        //   $item = Tarefa::where('resolvido', 0)->orWhere('resolvido',1)->first();
        //quantidade de valores resolvidos
        // $total = Tarefa::where('resolvido',0)->count();
        //   echo $item->titulo;
        // dd($list);
        //total de valores resolvidos
        // echo "TOTAL: ".$total;
        // foreach($total as $item) {
        //     echo $item->titulo."<br>";
        // }
        //inserindo dados pelo eloquent
            // $t = new tarefa;
            // $t->titulo = 'Testando  pelo  Eloquent';
            // $t->save();

            // echo "salvo com sucesso !";

            //alterando dados com eloquent orm
            // $t = tarefa::find(34);
            // $t->titulo = "Alterado com o eloquent orm";
            // $t->save();
            // echo "alterado com sucesso!";
            //alterando  o estado do elemento de resolvido 0 para resolvido 1
            // $t = tarefa::find(34);
            // $t->resolvido = 1;
            // $t->save();
            // echo "alterado com sucesso!";
            //removendo item selecionado

            // $t = tarefa::find(34);

            // $t->delete();

            //ações em massa, alterar dados em massa ou remover em massa
            // tarefa::where('resolvido', 0 )->update([
            //     'resolvido' => 1
            // ]);

            //deletando items em massa
            // tarefa::where('resolvido', 0 )->delete();
            // echo "excluido  com sucesso!";

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
        // $lista = [
        //     ['nome'=>'farinha de trigo', 'qt'=> 2],
        //     ['nome'=>'ovos', 'qt'=> 4],
        //     ['nome'=>'manteiga', 'qt'=> '2 colheres de sopa'],
        //     ['nome'=>'leite', 'qt'=> '180ml'],
        //     ['nome'=>'essencia de baunilha', 'qt'=> '10ml'],
        //     ['nome'=>'óleo', 'qt'=> '100ml'],
        //     ['nome'=>'fermento', 'qt'=> '15 gramas']
        // ];
        // $nome = "Carlos";
        // $idade = 90;
        // $data = [
        //     'nome'=>$nome,
        //     'idade'=>$idade,
        //     'lista'=>$lista
        // ];


        return view('admin.register');
    }
}
