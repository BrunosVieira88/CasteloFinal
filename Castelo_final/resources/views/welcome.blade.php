<x-layout title="Castelo Bruxo">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Special+Elite&display=swap');
        p{
            font-family: 'Special Elite', cursive;
        }
    </style>
    <x-navbar></x-navbar>
    <div class="d-flex justify-content-center mt-3">
        <img src="img/CasteloBruxo.png" class="img-fluid paraimagem fade-out" style="opacity: 0.8;" alt="" >
        <p id="welcome-message" class="card text-center" style="opacity: 0.8;width:50%;position:absolute;margin-top:20%;"></p>
        <a href="/new" class="btn btn-primary" style="opacity: 0.9;position:absolute;margin-top:25%;">Entrar</a>
      </div>
      <script>
        // Define a mensagem que será exibida
        const message = "BEM VINDO ESTUDANTE A CASTELOBRUXO";

        // Obtenha o elemento da mensagem
        const welcomeMessage = document.getElementById("welcome-message");

        // Defina a velocidade de animação em milissegundos
        const animationSpeed = 150;

        // Inicialize o índice do caractere
        let charIndex = 0;

        // Crie uma função para exibir a mensagem letra por letra
        function typeMessage() {
          // Obtenha o próximo caractere da mensagem
          const char = message.charAt(charIndex);

          // Adicione o caractere ao elemento da mensagem
          welcomeMessage.innerHTML += char;

          // Avance para o próximo caractere
          charIndex++;

          // Se ainda houver caracteres na mensagem, aguarde a próxima animação
          if (charIndex < message.length) {
            setTimeout(typeMessage, animationSpeed);
          } else {
            // Quando a mensagem inteira tiver sido exibida, espere um pouco e, em seguida, remova-a gradualmente
            setTimeout(() => {
              let opacity = 0.8;
              const fadeOutInterval = setInterval(() => {
                opacity -= 0.1;
                welcomeMessage.style.opacity = opacity;
                if (opacity <= 0) {
                  clearInterval(fadeOutInterval);
                  // Quando a mensagem desaparecer completamente, redefina o índice do caractere e comece novamente
                  charIndex = 0;
                  welcomeMessage.innerHTML = "";
                  welcomeMessage.style.opacity = 0.8;
                  setTimeout(typeMessage, animationSpeed);
                }
              }, animationSpeed);
            }, 1000);
          }
        }

        // Inicie a animação da mensagem
        typeMessage();
      </script>
</x-layout>
