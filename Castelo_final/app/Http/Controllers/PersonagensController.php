<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personagen;
use Illuminate\Support\Facades\DB;

class PersonagensController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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

    public function ResgatarPersonagens($id)
    {
        $personagem = Personagen::find($id);

        return view('/personagens/edit', compact('personagem'));

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

            $uploadedFile = $request->file('imagem');
            $originalName = $uploadedFile->getClientOriginalName();
            $path = $uploadedFile->storeAs('imagens', $originalName);
            $personagem->imagem = $path;
        }
        $personagem->descricao = $request->input('descricao');
        $personagem->save() ? $sucesso = "Deu tudo certo" : $sucesso = "Deu errado!";

        return view('/personagens/create',compact('sucesso'));
    }

    public function atualizarPersonagem(Request $request, $id)
{
    
    $personagem = Personagen::findOrFail($id);

    $personagem->nome = $request->input('nome');
    $personagem->sobrenome = $request->input('sobrenome');
    $personagem->ramo = $request->input('ramo');
    $personagem->idade = $request->input('idade');
    $personagem->times = $request->input('times');
    $personagem->descricao = $request->input('descricao');

    if ($request->hasFile('imagem')) {
        
        $uploadedFile = $request->file('imagem');
        $originalName = $uploadedFile->getClientOriginalName();
        $path = $uploadedFile->storeAs('imagens', $originalName);
        $personagem->imagem = $path;
    }

    $sucesso = $personagem->save() ?  'Atualizado com Sucesso' :  'Falha ao atualizar';

    // Redirecionar para a página de listagem de personagens ou outra página desejada
    return view('personagens/edit', compact('personagem','sucesso'));
}


}
