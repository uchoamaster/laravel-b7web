<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TarefasController extends Controller
{
    public function list() {
            //listando todos os itens cadastrados no bd
        $list = DB::select('SELECT * FROM tarefas');
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

    public function addAction() {

    }
    public function edit() {
        return view('tarefas.edit');
    }

    public function editAction() {

    }

    public function delete() {

    }

    public function done() {

    }


}
