<x-layout title="Castelo Bruxo">
    <x-navbar></x-navbar>
    
    <section class="container personagens-page">
        <div class="personagens-header">
            <h1>Personagens</h1>
            <a class="btn btn-primary" href="/personagens/create">Criar</a>
        </div>
        <form class="personagens-search" action="/personagens/ProcurarPersonagem" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="input-group">
                <input type="text" name="personagem" class="form-control" placeholder="Buscar personagem...">
                <button class="btn btn-primary" type="submit">Pesquisar</button>
            </div>
        </form>
        @isset($success)
            <div class="alert alert-success">{{ $success }}</div>
        @endisset
        @isset($personagens)
            @php
                $ramoGroups = $personagens->groupBy('ramo');
            @endphp
            <ul class="nav nav-tabs folder-tabs" id="ramoTabs" role="tablist">
                @foreach ($ramoGroups as $ramo => $personagensDoRamo)
                    @php
                        $tabId = 'ramo-' . \Illuminate\Support\Str::slug($ramo);
                    @endphp
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $loop->first ? 'active' : '' }}"
                            id="{{ $tabId }}-tab" data-bs-toggle="tab" data-bs-target="#{{ $tabId }}"
                            type="button" role="tab" aria-controls="{{ $tabId }}"
                            aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                            {{ $ramo }}
                        </button>
                    </li>
                @endforeach
            </ul>
            <div class="tab-content folder-content" id="ramoTabsContent">
                @foreach ($ramoGroups as $ramo => $personagensDoRamo)
                    @php
                        $tabId = 'ramo-' . \Illuminate\Support\Str::slug($ramo);
                    @endphp
                    <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                        id="{{ $tabId }}" role="tabpanel" aria-labelledby="{{ $tabId }}-tab">
                        <div class="row g-4 personagens-grid">
                            @foreach ($personagensDoRamo as $personagem)
                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <div class="personagem-card leader-card" onclick="redirecionar('/{{ $personagem->ramo }}/{{ $personagem->nome }}')">
                                        <div class="personagem-media">
                                            <img src="{{ asset('img/personagens.png') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="personagem-name">{{ $personagem->nome }} {{ $personagem->sobrenome }}</div>
                                        <div class="personagem-actions">
                                            <a class="btn btn-warning btn-sm" href="/personagens/editar/{{$personagem->id}}">editar</a>
                                            <a class="btn btn-danger btn-sm" href="/personagens/deletar/{{$personagem->id}}">Deletar</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        @endisset
    </section>

        <script>
            function redirecionar(nome) {
                window.location.href = nome;
            }

            document.addEventListener('DOMContentLoaded', () => {
                document.querySelectorAll('.personagem-actions a').forEach((link) => {
                    link.addEventListener('click', (event) => {
                        event.stopPropagation();
                    });
                });
            });
        </script>
</x-layout>
