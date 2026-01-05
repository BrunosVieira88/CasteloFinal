<x-layout title="Castelo Bruxo">
    @isset($retorno)
        <div class="container">
            <h1>Personagens Filtrados</h1>
            <div class="row">
                @foreach ($retorno as $personagem)
                <div class="col-md-3 mt-5" onclick="redirecionar('/{{ $personagem->ramo }}/{{ $personagem->nome }}')">
                    <div class="container">
                        <div class="d-flex align-items-end justify-content-center">
                            <img src="{{ asset('img/personagens.png') }}" class="img-fluid personagem-thumb" alt="">
                            <span class="position-absolute bg-light text-dark px-4 py-0 borbulhando">{{ $personagem->nome }} {{ $personagem->sobrenome }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>

        </div>
    @endisset
    <a href="/">Listar personagens</a>
</x-layout>
