<!DOCTYPE html>
<html lang="pt-br">

<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="../styles/css/styles.css">
  <title>ISD GESSO</title>
</head>

<body>

  <!-- MENU -->
  <header>
    <div class="row">
      <div class="col pr-0">
        <nav class="navbar navbar-expand-lg  navbar-dark bg-dark fixed-top menu" id="menu">
          <a class="navbar-brand logo homemenu" href="index.php#home">ISD GESSO</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
          </button>
        <!-- //código do kesse -->
          <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav ml-auto mb-0">
              <li class="nav-item">
                <a class="nav-link homemenu" href="index.php#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link servicesmenu" href="#services">Serviços</a>
              </li>
              <li class="nav-item">
                <a class="nav-link jobsmenu" href="#jobs">Portfólio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link aboutmenu" href="#about">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link contactmenu" href="#contact">Contato</a>
              </li>
          </ul></div>
        </nav>
      </div>
    </div>

    <a id="home" name="home" class="anchor"></a>
    <div class="row carrousel">
      <div class="col pr-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100"
                src="https://www.jornalspnorte.com.br/wp-content/uploads/2016/10/banner-1200x300.png"
                alt="Primeiro Slide">
            </div>

            <div class="carousel-item">
              <img class="d-block w-100"
                src="https://www.jornalspnorte.com.br/wp-content/uploads/2016/10/banner-1200x300.png"
                alt="Segundo Slide">
            </div>

            <div class="carousel-item">
              <img class="d-block w-100"
                src="https://www.jornalspnorte.com.br/wp-content/uploads/2016/10/banner-1200x300.png"
                alt="Terceiro Slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
          </a>
        </div>
      </div>
    </div>
  </header>

  <!-- SERVIÇOS -->
  <section class="container">
    <h2 class="text-center mt-1 mb-1"><a id="services" name="services" class="anchor"></a>Serviços</h2>
    <article class="row services">
      <div class="col">
        serviço 1
      </div>
    </article>
    <article class="row services">
      <div class="col">
        serviço 2
      </div>
    </article>
    <article class="row services">
      <div class="col">
        serviço 3
      </div>
    </article>
    <article class="row services">
      <div class="col">
        serviço 4
      </div>
    </article>
  </section>

  <!-- PORTFÓLIO -->
  <section>
    <h2 class="text-center mt-1 mb-1"><a id="jobs" name="jobs" class="anchor"></a>Portfólio</h2>
    <article class="row jobs">

      <div class="col">
        <div id="carouseljobs" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouseljobs" data-slide-to="0" class="active"></li>
            <li data-target="#carouseljobs" data-slide-to="1"></li>
            <li data-target="#carouseljobs" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="https://www.jornalspnorte.com.br/wp-content/uploads/2016/10/banner-1200x300.png" alt="Segundo Slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>JOB 1</h5>
                <p>DESCRIÇÃO 1</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://www.jornalspnorte.com.br/wp-content/uploads/2016/10/banner-1200x300.png" alt="Segundo Slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>JOB 2</h5>
                <p>DESCRIÇÃO 2</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="https://www.jornalspnorte.com.br/wp-content/uploads/2016/10/banner-1200x300.png" alt="Terceiro Slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>JOB 3</h5>
                <p>DESCRIÇÃO 3</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouseljobs" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
          </a>
          <a class="carousel-control-next" href="#carouseljobs" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Próximo</span>
          </a>
        </div>
      </div>

    </article>

  </section>

  <!-- SOBRE NÓS -->
  <section class="container">
    <h2 class="text-center mt-1 mb-1"><a id="about" name="about" class="anchor"></a>Sobre nós</h2>
    <article class="row about">
      <div class="col">
         Historinha da empresa
      </div>
    </article>
  </section>

  <!-- CONTATO -->
  <section >
    <h2 class="text-center mt-1 mb-1"><a id="contact" name="contact" class="anchor"></a>Contato</h2>
    <article class="row contact p-5">
      <div class="col-6" style="background-color: white; height: 400px;">
      </div> 
      <div class="col-6" style="background-color: gray; height: 400px;">
      </div>
    </article>
  </section>

  <!-- RODAPÉ -->
  <footer>
    <div class="row footer">
      <div class="col pr-0">
        <p>footer</p>
      </div>
    </div>

  </footer>
  <!-- JavaScript (Opcional) -->
  <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
  <script src="styles/js/script.js"></script>
</body>

</html>