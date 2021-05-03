<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\HomeController;

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
