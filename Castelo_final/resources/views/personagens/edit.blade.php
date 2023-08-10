<x-layout title="Castelo Bruxo">
    @isset($sucesso)
    {{$sucesso}}
    @endisset
    <div class="container">
        <h1>Editar Personagem</h1>
        <form action="{{ route('personagens.atualizar', ['id' => $personagem->id]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" id="nome" value="{{ $personagem->nome }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="nome">Sobrenome</label>
                        <input type="text" name="sobrenome" class="form-control" id="sobrenome"
                            value="{{ $personagem->sobrenome }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Area do bruxo </label>
                        <input name="ramo" class="form-control" id="ramo" value="{{ $personagem->ramo }}">
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="idade">Idade</label>
                        <input type="text" name="idade" class="form-control" id="idade"
                            value="{{ $personagem->idade }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="">Casa/Time</label>
                    <select name="times" class="form-control" id="times" value="{{ $personagem->times }}">
                        <option value="1">Aurinegro</option>
                        <option value="2">Verdepluma</option>
                        <option value="3">Brancoforte</option>
                        <option value="4">Rubrobravo</option>
                        <option value="5">Corvinal</option>
                        <option value="6">Sonserina</option>
                        <option value="7">Lufa-Lufa</option>
                        <option value="8">Grifinoria</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="imagem">Imagem</label>
               
                            <div class="custom-file">
                                <input type="file" name="imagem" class="custom-file-input" id="imagem">
                                <label class="custom-file-label" for="imagem">
                                    @if ($personagem->imagem)
                                                  
                                        <div class="input-group" style="float: right;">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    {{ $personagem->imagem }} <i class="fa fa-paperclip ms-2"></i>
                                                </span>
                                            </div>
                                    @else
                                        Escolha um arquivo
                                    @endif
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea name="descricao" class="form-control" id="descricao"
                            rows="4">{{ $personagem->descricao }}</textarea>
                    </div>

                </div>
            </div>

            <div class="d-flex justify-content-end">

            </div>




        </form>
    </div>
    <a href="/personagens">Listar personagens</a>
    <style>
        input[type="file"] {
            display: none;
        }
    </style>
</x-layout>