   // Seleciona o elemento que você deseja modificar
   const element = document.getElementById('grande');
   const element2 = document.getElementById('pequeno');



   // Função que adiciona ou remove a classe com base no tamanho da tela
   function ajustarClasse() {
   if (window.innerWidth >= 990) {
       // Remove a classe "desaparece" do elemento
       element.classList.remove('aparece');
       element2.classList.add('aparece');
   } else {
       element.classList.add('aparece');
       element2.classList.remove('aparece');
   }
   }

   // Chama a função para ajustar a classe no carregamento da página
   ajustarClasse();

   // Adiciona um listener para o evento 'resize' da janela
   window.addEventListener('resize', ajustarClasse);

   function Questionario(){

       primeiraPergunta();
   }

   function primeiraPergunta(){

   }

   function openModal(frase) {
       var modal = document.getElementById("myModal");
       modal.style.display = "block";
       document.getElementById("frase").innerHTML =frase;
   }

   // Lê o valor armazenado no navegador ou define como zero
   var contador = localStorage.getItem('contador') || 0;

   // Incrementa o contador
   contador++;

   // Salva o novo valor no navegador
   localStorage.setItem('contador', contador);

   // Atualiza o conteúdo do elemento HTML
   document.getElementById('contador').textContent = contador;

   const imagem = document.querySelector('.paraimagem');
   imagem.addEventListener('animationend', function() {
       imagem.classList.remove('fade-out');
       imagem.classList.add('fade-in');
   });

   imagem.addEventListener('animationstart', function() {
       imagem.classList.remove('fade-in');
       imagem.classList.add('fade-out');
   });



   function playAudio() {
   var audio = document.getElementById("myAudio");
   audio.play();
   }
