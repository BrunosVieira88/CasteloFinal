<x-layout title="Castelo Bruxo">
    <x-navbar></x-navbar>
    <style>
        .borbulhando {
            position: relative;
            display: inline-block;
            animation-name: borbulhar;
            animation-duration: 1s;
            animation-iteration-count: infinite;
            animation-direction: alternate;
        }

        @keyframes borbulhar {
            from {
                transform: translateY(0);
            }
            to {
                transform: translateY(-5px);
            }
        }
    </style>
    <form action="/personagens/ProcurarPersonagem" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="personagem">
        <i class="fas fa-search search-icon"></i>
    <button type="submit">Pesquisar</button>
    </form>
    <section class="container">
        @isset($personagens)
            @foreach ($personagens->groupBy('ramo') as $ramo => $personagensDoRamo)
                    <div class="row card p-4 mt-3">
                        <span class="borbulhando">{{ $ramo }}</span>
                        <div class="row">
                            @foreach ($personagensDoRamo as $personagem)
                                <div class="col-md-3 mt-5" onclick="redirecionar('/{{ $personagem->ramo }}/{{ $personagem->nome }}')">
                                    <div class="container">
                                        <div class="d-flex align-items-end justify-content-center">
                                            <img src="storage/{{ $personagem->imagem }}" style="cursor:pointer;height:15rem;max-width:15rem;" class="img-fluid" alt="">
                                            <span class="position-absolute bg-light text-dark px-4 py-0 borbulhando">{{ $personagem->nome }} {{ $personagem->sobrenome }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
            @endforeach
        @endisset
    </section>

        <a href="/personagens/create">Criar</a>
        <script>
            function redirecionar(nome) {
                window.location.href = nome;
            }
        </script>
</x-layout>


