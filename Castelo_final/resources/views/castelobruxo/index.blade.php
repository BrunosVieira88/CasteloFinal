<x-layout title="CasteloBruxo">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Golos+Text:wght@800&display=swap');

        h2 {
            text-align: center;
            color: white;
            font-family: 'Golos Text', sans-serif;
            text-shadow: 2px 2px 2px black;
        }

        h1 {
            color: white;
            font-family: 'Golos Text', sans-serif;
            text-shadow: 2px 2px 2px black;
        }

        .card-style {
            background-color: white;
        }

        #container {
            display: inline-block;
            position: relative;
        }

        .figcaption1 {
            position: absolute;
            bottom: 0;

            font-size: 40px;
            color: rgb(253, 249, 29);
            text-shadow: 2px 2px 3px black;
        }

        .figcaption2 {
            position: absolute;
            bottom: 10%;

            font-size: 40px;
            color: rgb(253, 249, 29);
            text-shadow: 2px 2px 3px black;
        }


        .cool-img {
            border-radius: 50%;
            animation-name: shake;
            animation-duration: 1s;
            animation-iteration-count: 3;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        .cool-img:nth-child(odd) {
            animation-name: moveUpDown;
            animation-duration: 0.5s;
            animation-iteration-count: infinite;
        }

        .cool-img:nth-child(even) {
            animation-name: moveUpDown;
            animation-duration: 0.5s;
            animation-iteration-count: infinite;
            animation-direction: reverse;
        }

        .cool-img:last-child {
            animation-name: moveUpDown;
            animation-duration: 0.5s;
            animation-iteration-count: 2;
            animation-direction: reverse;
            animation-fill-mode: forwards;
        }

        @keyframes moveUpDown {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }
    </style>
    <div class="container">
        <h1 class="mt-2">OS Times</h1>
        <div class="row mt-2">
            <div class="col-md-3">
                <div class="p-3 card" style="height: 26em;">
                    <img src="../img/RubroBravo.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Rubro Bravo</h5>
                        <a href="../Times/Aurinegro.html" style="margin-left: 20%;"><button
                            class="btn btn-primary">SAIBA MAIS</button></a>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 card" style="height: 26em;">
                    <img src="../img/BrancoForte.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Branco Forte</h5>
                        <a href="../Times/BrancoForte.html" style="margin-left: 20%;"><button
                                class="btn btn-primary">SAIBA MAIS</button></a>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 card" style="height: 26em;">
                    <img src="../img/Aurinegro.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Auri Negro</h5>
                        <a href="../Times/Aurinegro.html" style="margin-left: 20%;"><button
                                class="btn btn-primary">SAIBA MAIS</button></a>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="p-3 card" style="height: 26em;">
                    <img src="../img/VerdePluma.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">Verde Pluma</h5>
                        <a href="../Times/VerdePluma.png.html" style="margin-left: 20%;"><button
                                class="btn btn-primary">SAIBA MAIS</button></a>
                    </div>

                </div>
            </div>
        </div>
        <div class="row card-style mt-4">
            <div class="col-md-6 mt-5">
                <h1 class="mt-3">CasteloBruxo</h1>
                <div class="text-center">
                    <img src="../img/CasteloBruxo.png" class="img-fluid" alt="">

                </div>
            </div>
            <div class="col-md-6">
                <div class="  p-5 mt-5" style>
                    <p>um local mágico e repleto de história. O edifício em si é composto por diversas torres,
                        corredores intermináveis, salas de aula e áreas comuns, incluindo um refeitório e um pátio
                        interno. As salas de aula são equipadas com móveis antigos e utensílios de estudo, incluindo um
                        grande quadro negro que flutua no ar e canetas que escrevem sozinhas.</p>
                    <p>Os terrenos de CasteloBruxo são tão vastos quanto o prédio em si, com florestas densas, montanhas
                        escarpadas e cachoeiras majestosas. Há também uma grande área de treinamento para os alunos
                        praticarem magia, com poços e alvos mágicos para atirar feitiços.</p>
                    <p>CasteloBruxo é especialmente conhecido por sua riqueza em espécies raras e mágicas, e é
                        frequentemente visitado por especialistas em criaturas mágicas de todo o mundo. Há uma grande
                        variedade de animais mágicos vivendo nos arredores da escola, incluindo aves coloridas, cobras
                        venenosas, borboletas que causam confusão, macacos teimosos e grandes felinos. Os alunos também
                        são instruídos a manter os Caiporas (espíritos da floresta) em mente enquanto exploram a
                        floresta, e são ensinados a fazer oferendas para eles a fim de evitar qualquer tipo de punição.
                    </p>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-12 card-style p-5" style="margin-top: -5%; padding:5%;">
                <p>CasteloBruxo é mais antigo que sua propria construção, o lugar onde foi contruido Castelo Bruxo era
                    um local de encontro de Bruxos e Bruxos indiginas, o local possui um potencial magico proprio.</p>
                <p>No entanto, apesar de sua beleza e história, CasteloBruxo também enfrenta seus próprios desafios. O
                    governo bruxo está constantemente tentando controlar a escola e limitar a liberdade dos alunos e
                    professores. Além disso, há rumores de que certos indivíduos dentro do Conselho Mágico Brasileiro
                    (CMB) estão tentando infiltrar a escola e manipular os alunos para seus próprios fins. Mas, apesar
                    de todos esses obstáculos, CasteloBruxo continua sendo uma escola incrível, que oferece educação
                    mágica de primeira classe a jovens bruxos e bruxas do Brasil e do mundo.</p>
                <p>Inspirada no espirito Competidor dos criadores sul Americanos CasteloBruxo é dividido em 4 Times que
                    competem entre si desde sua fundação</p>
            </div>
        </div>
    </div>
    <section class="container">
        <h1>Criadores</h1>
        <div class="row card-style">

            <div class="col-md-6">
                <figure id="container">
                    <img src="../img/rafaela tricolora.png" class="mt-5 cool-img" />
                    <figcaption class="figcaption1">Rubrobravo</figcaption>
                    <figcaption class="figcaption2">Rafaela Tricolora</figcaption>
                </figure>

            </div>
            <div class="col-md-6">
                <div class="p-3 mt-5">
                    <p>Rafaela Tricolora é conhecida por sua habilidade em feitiços de proteção e sua luta pelos
                        direitos
                        dos bruxos afrodescendentes. Sua maior façanha mágica foi a criação de um escudo mágico em torno
                        de
                        CasteloBruxo que oculta a escola do mundo trouxa e impede que as autoridades mágicas brasileiras
                        interfiram na educação dos alunos. Seu maior legado é a luta pela igualdade e justiça para todos
                        os
                        bruxos e bruxas, independentemente de sua origem étnica. Ela incentivou seus alunos a defenderem
                        seus direitos e a se orgulharem de suas raízes.</p>
                    <p>Rafaela era uma mulher de estatura mediana, com cerca de 1,70m de altura. Ela tinha a pele escura
                        e o
                        rosto suave, com traços delicados e expressivos. Seus olhos eram castanhos escuros, profundos e
                        cheios de mistério. Rafaela tinha cabelos longos e negros, que caíam em cachos soltos até sua
                        cintura. Ela vestia roupas coloridas e vibrantes, com estampas de animais e elementos da
                        natureza, e
                        gostava de usar colares e brincos feitos de pedras e conchas.
                    </p>
                </div>
            </div>
        </div>
        <div class="row card-style">
            <div class="col-12 mt-4 p-5">
                <p>Rafaela Tricolora era uma bruxa descendente de africanos, que cresceu em uma família de magos no Rio
                    de Janeiro.Desde criança, Rafaela demonstrou um grande interesse pela história e pelas tradições
                    mágicas africanas. Ela estudou com grandes sacerdotes e sacerdotisas das religiões de matriz
                    africana, aprendendo sobre as divindades, os rituais e as práticas mágicas que fazem parte dessa
                    rica tradição. Com o tempo, Rafaela se tornou uma especialista em magia afro-brasileira e passou a
                    ensinar seus conhecimentos a outros bruxos e bruxas.</p>
                <p>era uma líder forte e justa, Rafaela muitas vezes tinha dificuldade em confiar em outras pessoas. Ela
                    também tendia a guardar rancor e podia ser bastante vingativa em suas ações.</p>
                <p>Quando soube da criação de CasteloBruxo, Rafaela viu a oportunidade de unir as tradições africanas
                    com a magia ensinada na escola. Ela se juntou aos outros três fundadores e contribuiu com seus
                    conhecimentos e habilidades para a construção e a organização da escola. Rafaela também foi
                    responsável por criar as aulas de magia afro-brasileira na escola, o que permitiu que muitos alunos
                    tivessem acesso a essa importante tradição.</p>
                <p>Além disso, Rafaela foi uma das principais defensoras da liberdade e da igualdade na escola. Ela
                    lutou contra a discriminação e a opressão sofridas pelos alunos negros e indígenas, e trabalhou para
                    que a magia afro-brasileira fosse valorizada e respeitada dentro e fora da escola. Sua influência
                    pode ser sentida até hoje em CasteloBruxo, onde a diversidade e a inclusão são valores fundamentais.
                </p>
                <p>Rafaela viveu até uma idade avançada e se tornou uma figura lendária na história de CasteloBruxo. Seu
                    legado continua a inspirar muitos bruxos e bruxas que estudam na escola, e sua contribuição para a
                    magia brasileira é reconhecida em todo o mundo mágico.</p>
            </div>
        </div>
        <div class="row card-style mt-5 p-5">
            <div class="col-md-6">
                <figure id="container">
                    <img src="../img/LucasTimonero.png" class="mt-5 cool-img" />
                    <figcaption class="figcaption1">Auri Negro</figcaption>
                    <figcaption class="figcaption2">Lucas Timonero</figcaption>
                </figure>
            </div>
            <div class="col-md-6">
                <div class="p-5 mt-5 p-5">
                    <p>Lucas Timonero é conhecido por sua habilidade em transfiguração e por sua lealdade inabalável à
                        escola. Sua maior façanha mágica foi a criação de um sistema de defesa mágica em CasteloBruxo
                        que
                        permite aos alunos e professores se transformarem em animais mágicos para proteger a escola de
                        ataques externos. Seu maior legado é a promoção de uma cultura de lealdade e trabalho em equipe
                        entre os alunos e professores de CasteloBruxo. Ele acreditava que, com a união e a
                        solidariedade,
                        todos os desafios poderiam ser superados.</p>
                    <p>Lucas era um homem alto e forte, com cerca de 1,90m de altura. Ele tinha a pele clara e o rosto
                        marcado por uma barba espessa e bem-cuidada. Seus olhos eram azuis claros, brilhantes e
                        inteligentes. Lucas tinha cabelos curtos e castanhos, em um corte moderno e bem-arrumado. Ele
                        vestia
                        roupas elegantes e bem-cortadas, geralmente em tons de azul e preto, e gostava de usar relógios
                        e
                        outros acessórios mágicos.
                    </p>

                </div>
            </div>
        </div>
        <div class="row card-style">
            <div class="col-12 mt-4 p-5">
                <p>Lucas Timonero era um bruxo descendente de italianos, que cresceu em uma família de magos em São
                    Paulo. Ele sempre teve um interesse especial pela história da magia e pela relação entre a magia e a
                    tecnologia. Durante seus estudos em Hogwarts, na Inglaterra, Lucas se especializou em transfiguração
                    e encantamentos relacionados a objetos mágicos.
                </p>
                <p>apesar de ser leal e dedicado, Lucas muitas vezes se colocava acima dos outros e tinha dificuldade em
                    trabalhar em equipe. Ele também tinha um temperamento curto e podia ser bastante impulsivo em suas
                    decisões.</p>
                <p>Lucas contribuiu para a criação de CasteloBruxo trazendo sua experiência em magia tecnológica,
                    incluindo a criação de artefatos mágicos e o uso de feitiços para controlar e manipular a energia
                    mágica. Ele também ajudou a desenvolver a infraestrutura da escola, incluindo o sistema de
                    comunicação mágica, as salas de aula e a área de treinamento.
                </p>
            </div>
        </div>


        <div class="row card-style mt-5 p-5">
            <div class="col-md-6">
                <figure id="container">
                    <img src="../img/FelipeBrancoForte.png" class="mt-5 cool-img" />
                    <figcaption class="figcaption1">Branco Forte</figcaption>
                    <figcaption class="figcaption2">Felipe Brancoforte</figcaption>
                </figure>
            </div>
            <div class="col-md-6">
                <div class="p-5 mt-5 p-5">
                    <p>Felipe Brancoforte é conhecido por sua incrível habilidade em encantamentos e sua coragem no
                        enfrentamento de criaturas mágicas perigosas. Sua maior façanha mágica foi a criação de uma
                        barreira
                        mágica em torno de CasteloBruxo que impede a entrada de seres malignos e protege os alunos e
                        professores da escola. Seu maior legado é a formação de uma escola que valoriza o
                        desenvolvimento
                        das habilidades dos alunos em encantamentos e criaturas mágicas. Muitos dos mais talentosos
                        encantadores da América do Sul passaram por CasteloBruxo e seguiram os passos de Felipe
                        Brancoforte
                        em busca de novos desafios.</p>

                </div>
            </div>
        </div>
        <div class="row card-style">
            <div class="col-12 mt-4 p-5">
                <p>Felipe era um homem de estatura mediana, com cerca de 1,75m de altura. Ele tinha a pele escura e o
                    rosto marcado por linhas de expressão profundas, resultado das experiências que viveu. Seus olhos
                    eram castanhos e brilhantes, sempre demonstrando uma mistura de sabedoria e determinação. Felipe
                    tinha cabelos longos e pretos, que caíam em cachos até seus ombros. Ele vestia roupas simples,
                    feitas de tecidos naturais, e gostava de usar colares e pulseiras de pedras e elementos naturais.
                </p>
                <p>Felipe Brancoforte era um bruxo nativo do Brasil, da tribo Tupinambá, que praticava magia há
                    gerações. Com a chegada dos europeus, Felipe foi capturado e levado como escravo para Portugal, onde
                    aprendeu a falar a língua dos colonizadores e se envolveu em um movimento de resistência dos bruxos
                    contra a Inquisição. Com a ajuda de outros bruxos, ele conseguiu escapar de Portugal e retornar ao
                    Brasil, onde se tornou um líder da comunidade bruxa.</p>
                <p> embora fosse um mago incrivelmente talentoso, ele muitas vezes agia de maneira arrogante e
                    condescendente com aqueles que não compartilhavam de seu domínio da magia. Ele também tendia a
                    favorecer seus próprios alunos em detrimento dos outros.</p>
                <p>Felipe Brancoforte contribuiu para a criação de CasteloBruxo com seus conhecimentos sobre magia
                    nativa e sua habilidade em se comunicar com os espíritos da floresta. Ele defendeu a importância de
                    preservar a magia nativa e as tradições dos povos indígenas, ao mesmo tempo em que adaptava essas
                    tradições aos ensinamentos europeus. Ele também foi responsável por estabelecer uma relação de
                    respeito e cooperação entre os bruxos de CasteloBruxo e as comunidades indígenas próximas.
                </p>
            </div>
        </div>

        <div class="row card-style mt-5 p-5">
            <div class="col-md-6">
                <figure id="container">
                    <img src="../img/fernandaVerdepluma.png" class="mt-5 cool-img" />
                    <figcaption class="figcaption1">Verde Pluma</figcaption>
                    <figcaption class="figcaption2">Fernanda Verdepluma</figcaption>
                </figure>
            </div>
            <div class="col-md-6">
                <div class="p-5 mt-5 p-5">
                    <p>Fernanda Verdepluma é conhecida por sua habilidade em herbologia e pela sua profunda conexão com
                        a
                        natureza. Sua maior façanha mágica foi a criação de um jardim mágico em CasteloBruxo que é capaz
                        de
                        produzir plantas e ervas raras com propriedades mágicas poderosas. Seu maior legado é a promoção
                        de
                        uma cultura de preservação do meio ambiente e da conscientização sobre os poderes mágicos das
                        plantas. Seus alunos aprendem a respeitar e cuidar da natureza, bem como a usar as plantas de
                        maneira responsável para fins mágicos.</p>
                    <p>Fernanda era uma mulher alta e esbelta, com cerca de 1,80m de altura. Ela tinha a pele morena
                        clara e
                        o rosto suave, com traços delicados e expressivos. Seus olhos eram verdes, lembrando a cor das
                        folhas das plantas que ela tanto amava. Fernanda tinha cabelos compridos e lisos, em um tom
                        castanho-avermelhado, que caíam em ondas leves até sua cintura. Ela vestia roupas fluidas,
                        geralmente em tons de verde e marrom, e gostava de usar flores e folhas em seus cabelos.</p>

                </div>
            </div>
        </div>
        <div class="row card-style">
            <div class="col-12  p-5">
                <p>Fernanda Verdepluma era uma bruxa descendente de colonos espanhóis que se estabeleceram na região do
                    atual Paraguai. Ela cresceu em meio a uma comunidade mágica forte, que misturava a magia europeia
                    com as tradições dos povos guarani, e aprendeu a controlar sua habilidade com as plantas e a
                    natureza desde criança.
                </p>
                <p>embora fosse gentil e compassiva, Fernanda muitas vezes lutava para tomar decisões difíceis. Ela era
                    conhecida por procrastinar e evitar confrontos, o que às vezes levava a atrasos ou problemas
                    maiores.</p>
                <p>Fernanda contribuiu para a criação de CasteloBruxo trazendo sua expertise em magia herbária e em
                    magia dos elementos naturais, como o vento e a água. Ela também trouxe a influência da cultura
                    guarani para dentro da escola, ajudando a desenvolver o conceito de respeito e conexão com a
                    natureza e seus espíritos.
                </p>
            </div>
        </div>

    </section>

</x-layout>