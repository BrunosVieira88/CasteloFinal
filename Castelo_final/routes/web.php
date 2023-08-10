<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonagensController;
use App\Http\Controllers\RotasController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/personagens',[PersonagensController::class, 'ListarPersonagens']);
Route::get('/personagens/create',[PersonagensController::class, 'CriarPersonagens']);
Route::get('/personagens/editar/{id}',[PersonagensController::class, 'ResgatarPersonagens']);
Route::post('/personagens/atualizar/{id}',[PersonagensController::class,'atualizarPersonagem'])->name('personagens.atualizar');

Route::post('personagens/armazenar',[PersonagensController::class, 'store']);
Route::post('/personagens/ProcurarPersonagem',[PersonagensController::class, 'ProcurarPersonagem']);

Route::get('/conselho',[RotasController::class, 'ConselhoSulAmericano']);
Route::get('/castelobruxo',[RotasController::class, 'CasteloBruxo']);
