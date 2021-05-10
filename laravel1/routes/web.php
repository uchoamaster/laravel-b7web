<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TarefasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/')->group(function(){

    Route::get('/', HomeController::class);

    Route::get('/register', [HomeController::class,'register']);

});

Route::prefix('/config')->group(function(){

    Route::get('/', [ConfigController::class,'config']);
    Route::get('/info', [ConfigController::class,'info']);
    Route::get('/permissoes', [ConfigController::class,'permissoes']);
});

//alternativa de rota
Route::fallback(function(){
    return view('404');
});


//QUANDO COLOCAMOS ESSA LINHA DE CÓDIGO O ROUTE RESOURCE JA CRIA TODAS ESSAS ROTAS ABAIXO COMENTADAS!!
Route::resource('todo', 'TodoController');

/*

GET - /todo  - index -  todo.index - LISTA OS ITENS
GET - /todo/create - create -  todo.create - FORM  DE CRIAÇÃO
POST - /todo - store - todo.store  - RECEBER  OS DADOS  E ADD ITEM
GET - /todo/{id} -  show - todo.show -  ITEM INDIVIDUAL
GET - /todo/{id}/edit -  edit -  todo.edit -  FORM DE EDIÇÃO
PUT - /todo{id} - update -  todo.update  -  RECEBER OS DADOS  E UPDATE ITEM
DELETE - /todo{id} - destroy - todo.destroy - DELETAR O ITEM

*/

//rotas do controller tarefas

Route::prefix('/tarefas')->group(function(){

    Route::get('/', [TarefasController::class,'list'])->name('tarefas.list'); // Lista de tarefas
    Route::get('add', [TarefasController::class,'add'])->name('tarefas.add'); // Tela de Adição
    Route::post('add', [TarefasController::class,'addAction']); // Ação de Adição
    Route::get('edit/{id}', [TarefasController::class,'edit'])->name('tarefas.edit'); // Tela de Edição
    Route::post('edit/{id}',[TarefasController::class,'editAction']); // Ação de Edição
    Route::get('delete/{id}', [TarefasController::class,'del'])->name('tarefas.del'); // Ação de exclusao
    Route::get('marcar/{id}', [TarefasController::class,'done'])->name('tarefas.done'); // Marcar resolvido/não.
});


