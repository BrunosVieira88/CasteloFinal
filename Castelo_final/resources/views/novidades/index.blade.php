<x-layout title="CasteloBruxo">
    <link rel="stylesheet" href="css/stylo.css">
    <x-navbar></x-navbar>
    <section class="container">
        
        <div class="row novidades-hero g-4 p-4 p-md-5 align-items-center mt-5 ">
            <div class="col-lg-6">
                <div class="hero-media">
                    <img src="img/capalivro.jpeg" class="img-fluid" alt="">
                    <span class="hero-badge">Novidade</span>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-content">
                    <h1 class="hero-title">Castelo Bruxo: O livro da saga brasileira</h1>
                    <p class="hero-text">
                        O livro que voce pode baixar aqui foi escrito por mim, Bruno Santos Vieira. Toda a lore
                        (mitologia) e baseada nos livros de Harry Potter, pelos quais tenho grande apreco. Vou trazer
                        atualizacoes a cada capitulo lancado.
                    </p>
                    <div class="hero-actions">
                        <button class="btn btn-cta">Leia online</button>
                        <button class="btn btn-ghost">Baixe o livro completo</button>
                    </div>
                    <div class="hero-meta">
                        <div>
                            <span class="meta-label">Atualizacoes</span>
                            <span class="meta-value">Novos capitulos em progresso</span>
                        </div>
                        <div>
                            <span class="meta-label">Universo</span>
                            <span class="meta-value">Mitologia brasileira + magia</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div>
            <x-card primeiroTitulo="Personagens"
                primeiroTexto="A comunidade bruxa no Brasil é uma sociedade complexa e diversificada, composta por bruxos e bruxas de todas as idades, classes sociais, etnias e orientações sexuais."
                segundoTitulo="CSM - CONSELHO SUL AMERICANO DE MAGIA"
                segundoTexto="O CSM é a autoridade maxima Bruxa na america do sul" terceiroTitulo="CASTELO BRUXO"
                terceiroTexto="Castelo Bruxo recebe alunos de todo continente sul americano sendo uma escola para todos!"
                quartoTitulo="Os 4 times de CasteloBruxo" quartoTexto="Descubra qual Time voce seria em CasteloBruxo"
                primeiroLink="/personagens" segundoLink="/conselho" terceiroLink="/castelobruxo"
                quartoLink="/personagens"></x-card>
            <x-carrosel primeiroTitulo="Personagens"
                primeiroTexto="A comunidade bruxa no Brasil é uma sociedade complexa e diversificada, composta por bruxos e bruxas de todas as idades, classes sociais, etnias e orientações sexuais."
                segundoTitulo="CSM - CONSELHO SUL AMERICANO DE MAGIA"
                segundoTexto="O CSM é a autoridade maxima Bruxa na america do sul" terceiroTitulo="CASTELO BRUXO"
                terceiroTexto="Castelo Bruxo recebe alunos de todo continente sul americano sendo uma escola para todos!"
                quartoTitulo="Os 4 times de CasteloBruxo" quartoTexto="Descubra qual Time voce seria em CasteloBruxo"
                primeiroLink="/personagens" segundoLink="/conselho" terceiroLink="/castelobruxo"
                quartoLink="/personagens"></x-carrosel>
            <section class="wiki-section">
                <div class="wiki-header">
                    <h2>Wiki</h2>
                    <p>Esse topico vai ser usado como uma wiki para meu projeto do livro de fan fic Harry Potter.</p>
                </div>
                <div class="wiki-card leader-card">
                    <div class="wiki-media">
                        <img src="img/arthur o ataque ao ministerio.png" class="img-fluid paraimagem fade-out" alt="">
                    </div>
                    <div class="wiki-content">
                        <h3>Resumo da história</h3>
                        <p>Miguel é um jovem bruxo que está prestes a começar seus estudos em Castelo Bruxo. Em sua
                            jornada, ele recebe um cajado mágico com núcleo de hidra, um dos mais raros e poderosos do
                            mundo mágico. Mas o que ele não sabe é que esse cajado é objeto de desejo de um
                            ex-revolucionário chamado Arthur, que fará de tudo para consegui-lo.</p>
                        <p>Enquanto isso, o CMB esconde uma trama obscura e apaga a memória de muitos bruxos, causando
                            um clima de incerteza e medo no mundo bruxo brasileiro. Arthur se alia a Meghan Lockhart,
                            uma auror do Ministério Bruxo da Inglaterra, e Carlos, um auror brasileiro, para descobrir
                            os segredos por trás dos planos do CMB. Meghan está investigando um possível atentado em
                            Londres com uso de criaturas mágicas, algo que Arthur também fez no Brasil.</p>
                        <p>Mas eles não estão sozinhos nessa luta. Um líder revolucionário mais sanguinolento surgiu no
                            Brasil e está determinado a derrubar o governo de qualquer maneira. Será que Arthur, Meghan
                            e Carlos serão capazes de descobrir os segredos do CMB e impedir o líder revolucionário
                            antes que seja tarde demais?</p>
                    </div>
                </div>
                <div class="wiki-card wiki-card-alt leader-card">
                    <div class="wiki-content">
                        <h3>A comunidade Bruxa no Brasil</h3>
                        <p>A comunidade bruxa no Brasil é uma sociedade complexa e diversificada, composta por bruxos e
                            bruxas de todas as idades, classes sociais, etnias e orientações sexuais.</p>
                        <p>Ao contrário do que se imagina, a comunidade bruxa no Brasil não é isolada, eles vivem entre
                            os trouxas (pessoas sem habilidades mágicas) e possuem suas próprias instituições, como
                            escolas de magia, lojas de varinhas, lojas de ingredientes mágicos e até mesmo bancos. Eles
                            também possuem suas próprias autoridades, como o Ministério da Magia e o Ministro da Magia,
                            que governam e regulamentam a prática da magia no país.</p>
                        <p>No entanto, a comunidade bruxa no Brasil é dividida em diferentes classes sociais, com bruxos
                            de elite que possuem grande poder e riqueza, e bruxos de classe baixa que lutam para
                            sobreviver e enfrentam discriminação e opressão. Essa desigualdade é perpetuada pelo
                            Ministério da Magia, que se aproveita de seu poder para controlar e oprimir a população
                            bruxa.</p>
                    </div>
                    <div class="wiki-media-stack">
                        <img src="img/MatrizInvertida.png" class="img-fluid" alt="">
                        <img src="img/newCasteloBruxo.jpeg" class="img-fluid" alt="">
                    </div>
                </div>
            </section>


        </div>
        <audio id="myAudio">
            <source src="music/hp.m4a" type="audio/mpeg">
        </audio>
        <script src="js/PaginaInicial.js"></script>
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                const defaultSpeed = 28;
                const defaultPause = 30000;
                const autoBlocks = Array.from(document.querySelectorAll('.wiki-section *'))
                    .filter((block) => !block.classList.contains('typewriter'))
                    .filter((block) => block.querySelectorAll(':scope > p').length > 2);

                autoBlocks.forEach((block) => {
                    block.classList.add('typewriter');

                    if (!block.dataset.speed) {
                        block.dataset.speed = String(defaultSpeed);
                    }

                    if (!block.dataset.pause) {
                        block.dataset.pause = String(defaultPause);
                    }
                });

                const blocks = document.querySelectorAll('.typewriter');

                blocks.forEach((block) => {
                    const speed = parseInt(block.dataset.speed || String(defaultSpeed), 10);
                    const pause = parseInt(block.dataset.pause || String(defaultPause), 10);
                    const paragraphs = Array.from(block.querySelectorAll('p'));
                    const texts = paragraphs.map((p) => p.textContent.trim());

                    paragraphs.forEach((p) => {
                        p.textContent = '';
                    });

                    let pIndex = 0;
                    let charIndex = 0;

                    const typeNext = () => {
                        if (pIndex >= paragraphs.length) {
                            return;
                        }

                        const p = paragraphs[pIndex];
                        const text = texts[pIndex];

                        if (!text) {
                            pIndex += 1;
                            charIndex = 0;
                            setTimeout(typeNext, pause);
                            return;
                        }

                        p.classList.add('typing');

                        if (charIndex < text.length) {
                            p.textContent += text.charAt(charIndex);
                            charIndex += 1;
                            setTimeout(typeNext, speed);
                        } else {
                            p.classList.remove('typing');
                            pIndex += 1;
                            charIndex = 0;
                            setTimeout(typeNext, pause);
                        }
                    };

                    setTimeout(typeNext, 600);
                });
            });
        </script>
</x-layout>
