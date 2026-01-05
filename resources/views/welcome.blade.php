<x-layout title="Castelo Bruxo">

<x-navbar></x-navbar>
  <div class="welcome-page d-flex justify-content-center mt-3">
      <img src="img/CasteloBruxo.png" class="img-fluid paraimagem fade-out welcome-hero-img" alt="" >
      <div class="typewriter welcome-message" data-speed="28" data-pause="30000">
          <p class="card leader-cardtext-center">BEM VINDO ESTUDANTE A CASTELOBRUXO</p>
      </div>
      <a href="/login" class="btn btn-primary welcome-cta">Entrar</a>
  </div>
<script>
  document.addEventListener('DOMContentLoaded', () => {
    const blocks = document.querySelectorAll('.typewriter');

    blocks.forEach((block) => {
      const speed = parseInt(block.dataset.speed || '28', 10);
      const pause = parseInt(block.dataset.pause || '30000', 10);
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
