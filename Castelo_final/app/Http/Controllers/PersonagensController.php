<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personagen;
use Illuminate\Support\Facades\DB;

class PersonagensController extends Controller
{
    public function ListarPersonagens(){

        /*$personagens = Personagen::all();*/

        $personagens = Personagen::query()->orderBy('ramo','desc')->get();


        return view('personagens.index', compact('personagens'));
    }

    public function ProcurarPersonagem(Request $request){

        $personagem = $request->input('personagem');
        $retorno = DB::select('SELECT * FROM personagens WHERE nome like ?', ['%'.$personagem.'%']);

        return view('busca.busca', compact('retorno'));

    }

    public function CriarPersonagens()
    {
        return view('personagens.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:128',
            'sobrenome' => 'required|max:128',
            'idade' => 'required',
            'times' => 'nullable|max:255',
            'descricao' => 'required'
        ]);

        $personagem = new Personagen();
        $personagem->nome = $request->input('nome');
        $personagem->sobrenome = $request->input('sobrenome');
        $personagem->idade = $request->input('idade');
        $personagem->ramo = $request->input('ramo');
        $personagem->times = $request->input('times');
        if ($request->hasFile('imagem')) {
          $personagem->imagem =  $request->file('imagem')->store('imagens');
        }
        $personagem->descricao = $request->input('descricao');
        $personagem->save() ? $sucesso = "Deu tudo certo" : $sucesso = "Deu errado!";

        return view('/personagens/create',compact('sucesso'));
    }

}
