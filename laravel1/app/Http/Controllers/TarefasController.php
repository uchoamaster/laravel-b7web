<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  App\Models\tarefa;

class TarefasController extends Controller
{
    public function list() {
            //listando todos os itens cadastrados no bd
        // $list = DB::select('SELECT * FROM tarefas');
        //aqui eh a mesma chamada só que usando eloquent orm
        $list = tarefa::all();
        //lista apenas as tarefas concluidas com condicional
        // $list = DB::select('SELECT * FROM tarefas WHERE resolvido = :status', [
        //     'status'=>0]);

        return view('tarefas.list', [
            'list' => $list
        ]);
    }

    public function add() {
        return view('tarefas.add');
    }

    public function addAction(Request $request) {
            $request->validate([
                'titulo'=> [ 'required', 'string' ]
            ]);


            $titulo = $request->input('titulo');

            // DB::insert('INSERT INTO tarefas (titulo) VALUES (:titulo)',[
            //     'titulo' => $titulo
            // ]);
            $t =  new Tarefa;
            $t->titulo = $titulo;
            $t->save();



            return redirect()->route('tarefas.list');

    }
    public function edit($id) {
        // $data = DB::select('SELECT * FROM  tarefas WHERE id =:id',[
        //     'id'=> $id
        // ]);

        $data = tarefa::find($id);

        if($data) {
            return view('tarefas.edit',[
                'data'=> $data
            ]);
        }else {
            return redirect()->route('tarefas.list');
        }
    }

    public function editAction(Request $request, $id) {
        $request->validate([
            'titulo'=> [ 'required', 'string' ]
        ]);

        $titulo = $request->input('titulo');
        // DB::update('UPDATE tarefas SET titulo = :titulo WHERE id = :id', [
        //            'id'=> $id,
        //            'titulo' => $titulo
        //             ]);
        //colocando orm pode-se colocar da seguinte forma
        // $t = tarefa::find($id);
        // $t->titulo = $titulo;
        // $t->save();

        //outra forma de fazer a chamada de update com 1 linha
        tarefa::find($id)->update(['titulo'=>$titulo]);
        return redirect()->route('tarefas.list');
    }

    public function del($id) {
        DB::delete('DELETE FROM  tarefas WHERE  id = :id', [
            'id' => $id
        ]);
        return redirect()->route('tarefas.list');
    }

    public function done($id) {
        //opção 1 será verificar select + update
        //opção 2 update matemático, um unico update
        DB::update('UPDATE tarefas SET resolvido = 1 - resolvido WHERE id = :id',[
            'id'=>$id]);
        return redirect()->route('tarefas.list');
    }


}
