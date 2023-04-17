<div class="row aparece mt-3" id="grande" >
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inne carousel-container">
          <div class="carousel-item active">
            <img src="img/PersonagensReunidos.png" class="d-block  " style="box-shadow: 2px 2px 4px white;margin-left: 25%;width: 50%;" alt="...">
            <div class="carousel-caption d-none d-md-block" style="background-color: rgba(240, 248, 255, 0.2);">
              <h5 class="melhorLeitura">{{ $primeiroTitulo }}</h5>
              <p class="melhorLeitura">{{ $primeiroTexto }}</p>
              <a href="{{ $primeiroLink }}"  ><button class="btn btn-primary ">SAIBA MAIS</button></a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/CMB.png" class="d-block " alt="..." style="box-shadow: 2px 2px 4px white;margin-left: 25%;">
            <div class="carousel-caption d-none d-md-block" style="background-color: rgba(240, 248, 255, 0.2);">
                <p class="melhorLeitura" >{{ $segundoTitulo }} </p>
                <p class="melhorLeitura">{{ $segundoTexto }} </p>
                <a href="{{ $segundoLink }}"  ><button class="btn btn-primary">SAIBA MAIS</button></a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/CasteloBruxo.png" class="d-block " alt="..." style="box-shadow: 2px 2px 4px white;margin-left: 25%;">
            <div class="carousel-caption d-none d-md-block" style="background-color: rgba(240, 248, 255, 0.2);">
                <p class="melhorLeitura">{{ $terceiroTitulo }}</p>
                <p class="melhorLeitura">{{ $terceiroTexto }}</p>
                <a href="{{ $terceiroLink }}"  ><button class="btn btn-primary">SAIBA MAIS</button></a>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/Times.png" class="d-block " alt="..." style="box-shadow: 2px 2px 4px white;margin-left: 15%;width: 70%;">
            <div class="carousel-caption d-none d-md-block" style="background-color: rgba(240, 248, 255, 0.2);">
                <p class="melhorLeitura">{{ $quartoTitulo }}</p>
                <p class="melhorLeitura">{{ $quartoTexto }}</p>
                <a href="{{ $quartoLink }}"  ><button class="btn btn-primary">SAIBA MAIS</button></a>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </div>

