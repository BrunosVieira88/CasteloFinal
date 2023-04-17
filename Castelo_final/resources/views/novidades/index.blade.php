<x-layout title="CasteloBruxo">
    <link rel="stylesheet" href="css/stylo.css">
    <x-navbar></x-navbar>
    <section class="container">
    <div>
        <x-card
            primeiroTitulo="Personagens"
            primeiroTexto="A comunidade bruxa no Brasil é uma sociedade complexa e diversificada, composta por bruxos e bruxas de todas as idades, classes sociais, etnias e orientações sexuais."
            segundoTitulo="CSM - CONSELHO SUL AMERICANO DE MAGIA"
            segundoTexto="O CSM é a autoridade maxima Bruxa na america do sul"
            terceiroTitulo="CASTELO BRUXO"
            terceiroTexto="Castelo Bruxo recebe alunos de todo continente sul americano sendo uma escola para todos!"
            quartoTitulo="Os 4 times de CasteloBruxo"
            quartoTexto="Descubra qual Time voce seria em CasteloBruxo"
            primeiroLink="/personagens"
            segundoLink="/personagens"
            terceiroLink="/personagens"
            quartoLink="/personagens"
        ></x-card>
        <x-carrosel
            primeiroTitulo="Personagens"
            primeiroTexto="A comunidade bruxa no Brasil é uma sociedade complexa e diversificada, composta por bruxos e bruxas de todas as idades, classes sociais, etnias e orientações sexuais."
            segundoTitulo="CSM - CONSELHO SUL AMERICANO DE MAGIA"
            segundoTexto="O CSM é a autoridade maxima Bruxa na america do sul"
            terceiroTitulo="CASTELO BRUXO"
            terceiroTexto="Castelo Bruxo recebe alunos de todo continente sul americano sendo uma escola para todos!"
            quartoTitulo="Os 4 times de CasteloBruxo"
            quartoTexto="Descubra qual Time voce seria em CasteloBruxo"
            primeiroLink="/personagens"
            segundoLink="/personagens"
            terceiroLink="/personagens"
            quartoLink="/personagens"
        ></x-carrosel>
        <div class="mt-5">
            <h2 style="color:white;">Wiki</h2>
            <p style="color:white;">Esse topico vai ser usado  como uma wiki para meu projeto do livro de fan fic Harry Potter</p>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="img/arthur o ataque ao ministerio.png" style="width: 35rem;"  class="img-fluid paraimagem fade-out" alt="">
            </div>
            <div class="col-md-12">
                <div class="resumo">
                    <h1>Resumo da história</h1>
                    <p>Miguel é um jovem bruxo que está prestes a começar seus estudos em Castelo Bruxo. Em sua jornada, ele recebe um cajado mágico com núcleo de hidra, um dos mais raros e poderosos do mundo mágico. Mas o que ele não sabe é que esse cajado é objeto de desejo de um ex-revolucionário chamado Arthur, que fará de tudo para consegui-lo.</p>
                    <p>Enquanto isso, o CMB esconde uma trama obscura e apaga a memória de muitos bruxos, causando um clima de incerteza e medo no mundo bruxo brasileiro. Arthur se alia a Meghan Lockhart, uma auror do Ministério Bruxo da Inglaterra, e Carlos, um auror brasileiro, para descobrir os segredos por trás dos planos do CMB. Meghan está investigando um possível atentado em Londres com uso de criaturas mágicas, algo que Arthur também fez no Brasil.</p>
                    <p>Mas eles não estão sozinhos nessa luta. Um líder revolucionário mais sanguinolento surgiu no Brasil e está determinado a derrubar o governo de qualquer maneira. Será que Arthur, Meghan e Carlos serão capazes de descobrir os segredos do CMB e impedir o líder revolucionário antes que seja tarde demais?</p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 5%;">
            <div class="col-md-12">
                <img src="img/MatrizInvertida.png" style="width: 45rem;" class="img-fluid d-flex align-content-center" alt="">
            </div>
            <div class="col-md-12 card">
                <h3>A comunidade Bruxa no Brasil</h3>
                <p>A comunidade bruxa no Brasil é uma sociedade complexa e diversificada, composta por bruxos e bruxas de todas as idades, classes sociais, etnias e orientações sexuais.</p>
                <p>Ao contrário do que se imagina, a comunidade bruxa no Brasil não é isolada, eles vivem entre os trouxas (pessoas sem habilidades mágicas) e possuem suas próprias instituições, como escolas de magia, lojas de varinhas, lojas de ingredientes mágicos e até mesmo bancos. Eles também possuem suas próprias autoridades, como o Ministério da Magia e o Ministro da Magia, que governam e regulamentam a prática da magia no país.</p>
                <p>No entanto, a comunidade bruxa no Brasil é dividida em diferentes classes sociais, com bruxos de elite que possuem grande poder e riqueza, e bruxos de classe baixa que lutam para sobreviver e enfrentam discriminação e opressão. Essa desigualdade é perpetuada pelo Ministério da Magia, que se aproveita de seu poder para controlar e oprimir a população bruxa.</p>
            </div>
        </div>
    </div>
    <audio id="myAudio">
        <source src="music/hp.m4a" type="audio/mpeg">
    </audio>
    <script src="js/PaginaInicial.js"></script>
</x-layout>
