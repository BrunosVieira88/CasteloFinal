<x-layout title="Castelo Bruxo">
    <x-navbar></x-navbar>

    
        <a href="/personagens/create">Criar</a>
        @isset($success)
            {{$success}}
        @endisset
        @isset($personagens)
            @foreach ($personagens->groupBy('ramo') as $ramo => $personagensDoRamo)
                    <div class="row card p-4 mt-3 leader-card">
                        <span class="borbulhando">{{ $ramo }}</span>
                        <div class="row">
                            @foreach ($personagensDoRamo as $personagem)
                                <div class="col-md-3 mt-5" onclick="redirecionar('/{{ $personagem->ramo }}/{{ $personagem->nome }}')">
                                    <div class="container">
                                        <div class="d-flex align-items-end justify-content-center">
                                            <img src="storage/{{ $personagem->imagem }}" class="img-fluid personagem-thumb" alt="">
                                            <span class="position-absolute bg-light text-dark px-4 py-0 borbulhando">{{ $personagem->nome }} {{ $personagem->sobrenome }}</span>
                                        </div>
                                    </div>
                                    <a   class="btn btn-warning" href="/personagens/editar/{{$personagem->id}}">editar</a>
                                    <a   class="btn btn-danger" href="/personagens/deletar/{{$personagem->id}}">Deletar</a>
                                </div>
                                
                            @endforeach
                        </div>
                    </div>
            @endforeach
        @endisset

       <h1>Rafaela</h1>
        <script>
            function redirecionar(nome) {
                window.location.href = nome;
            }
        </script>
</x-layout>


