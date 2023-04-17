<x-layout title="Castelo Bruxo">
    @isset($sucesso)
        {{$sucesso}}
    @endisset
        <div class="container">
            <h1>Adicionar Personagem</h1>
            <form action="/personagens/armazenar" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome">
                </div>
                <div class="form-group">
                    <label for="nome">Sobrenome</label>
                    <input type="text" name="sobrenome" class="form-control" id="sobrenome" placeholder="Digite o sobrenome">
                </div>
                <select name="ramo" class="form-control" id="ramo">
                    <option value="Fundador">Fundador</option>
                    <option value="Bruxo">Bruxo</option>
                    <option value="Professor">Professor</option>
                    <option value="CSM">CSM</option>
                    <option value="Alunos">Alunos</option>
                </select>
                <div class="form-group">
                    <label for="idade">Idade</label>
                    <input type="text" name="idade" class="form-control" id="idade" placeholder="Digite a idade">
                </div>
                <select name="times" class="form-control" id="times">
                    <option value="1">Aurinegro</option>
                    <option value="2">Verdepluma</option>
                    <option value="3">Brancoforte</option>
                    <option value="4">Rubrobravo</option>
                    <option value="5">Corvinal</option>
                    <option value="6">Sonserina</option>
                    <option value="7">Lufa-Lufa</option>
                    <option value="8">Grifinoria</option>
                  </select>
                <div class="form-group">
                    <label for="descricao">Descrição</label>
                    <textarea name="descricao" class="form-control" id="descricao" placeholder="Digite a descrição"></textarea>
                </div>
                <div class="form-group">
                    <label for="imagem">Imagem</label>
                    <input type="file" name="imagem" class="form-control-file" id="imagem">
                </div>

                <button type="submit" class="btn btn-primary">Adicionar</button>
            </form>
        </div>
        <a href="/personagens">Listar personagens</a>
</x-layout>


