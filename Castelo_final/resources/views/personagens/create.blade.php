<x-layout title="Castelo Bruxo">
    @isset($sucesso)
    {{$sucesso}}
    @endisset
    <div class="container">
        <div class="card p-3 mt-5">
            <h1>Adicionar Personagem</h1>
            <form action="/personagens/armazenar" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" class="form-control" id="nome">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nome">Sobrenome</label>
                            <input type="text" name="sobrenome" class="form-control" id="sobrenome"
                                >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="ramo">Ramo</label>
                            <select name="ramo" class="form-control" id="ramo">
                                <option value="Fundador">Fundador</option>
                                <option value="Bruxo">Bruxo</option>
                                <option value="Professor">Professor</option>
                                <option value="CSM">CSM</option>
                                <option value="Alunos">Alunos</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="idade">Idade</label>
                            <input type="text" name="idade" class="form-control" id="idade"
                               >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="times">Casa/Time</label>
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
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="imagem">Imagem</label>
                            <div class="custom-file border p-1">
                                <input type="file" name="imagem" class="custom-file-input" id="imagem" onchange="updateFileName(this)">
                                <label class="custom-file-label " for="imagem">Escolha um arquivo</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="descricao">Descrição</label>
                            <textarea name="descricao" class="form-control" id="descricao"
                                rows="4"></textarea>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between mt-2">
                    <a href="/personagens" class="btn btn-secondary">Listar personagens</a>
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                </div>
            </form>
        </div>
      
    </div>
    
    <style>
        input[type="file"] {
            display: none;
        }
    </style>
    <script>
        function updateFileName(input) {
            const label = input.nextElementSibling; // Get the label element next to the input
            const fileName = input.files[0].name; // Get the selected file name
            
            // Update the label text with the file name and a paperclip icon
            label.innerHTML = fileName + ' <i class="fa fa-paperclip ms-2"></i>';
        }
    </script>
</x-layout>
