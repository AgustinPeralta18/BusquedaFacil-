<?php



session_start();
if (!isset($_SESSION['Email'])) {
  echo '
    <script>
      alert("Por favor, debes iniciar sesion");
      window.location = "http://localhost/busquedaFacil--main/login.php";
    </script>
  ';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplicaciones</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="../css/estilos.css">
</head>

<body>

  <!-- MENU -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.php">
        <img src="../recursos/busqueda.png" alt="" width="24" height="24" class="d-inline-block align-text-top">
        Busqueda Facil
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Aplicaciones
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="./Ides.php">Ides</a></li>
              <li><a class="dropdown-item" href="./aplicacionesG.php">Aplicaciones</a></li>
            </ul>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light " href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Juegos
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="./accion.php">Accion</a></li>
              <li><a class="dropdown-item" href="./aventura.php">Aventura</a></li>
              <li><a class="dropdown-item" href="./terror.php">Terror</a></li>
              <li><a class="dropdown-item" href="./estrategia.php">Estrategia</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="./ayuda.php">Ayuda</a>
          </li>

        </ul>


      </div>
    </div>
  </nav>

  <!-- FONDO IMAGENES-->

  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="https://discord.com/"><img src="../recursos/discordfondo.jpg" class="d-block w-100" height="800" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-bg-dark">Discord</h5>
          <p class="text-bg-dark">La aplicacion que estabas buscando para estar conectado con tus amigos</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="https://store.steampowered.com/?l=spanish"><img src="../recursos/Steamfondo.jpg" class="d-block w-100" height="800" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-bg-dark">STEAM</h5>
          <p class="text-bg-dark">Tus juegos en un solo lugar</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="https://www.origin.com/arg/es-es/store"><img src="../recursos/spotifyfondo.png" class="d-block w-100" height="800" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-bg-dark">Spotify</h5>
          <p class="text-bg-dark">La mayor plataforma de streaming musical</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="https://www.origin.com/arg/es-es/store"><img src="../recursos/originfondo.png" class="d-block w-100" height="800" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-bg-dark">Origin</h5>
          <p class="text-bg-dark">Los mejores precios y juegos</p>
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

  <!--TITULO-->

  <h1 class="text-center titulos blockquote fs-2">APLICACIONES GRATIS</h1>


  <!-- TABLA DE APLICACIONES GRATIS -->
  <table class="table-primary border-3 margin-table">

    <thead>
      <!-- DISCORD -->
      <tr>
        <th scope="col">
          <h2 class="p-3 fs-2 border-top border-bottom border-dark border-3">Discord</h2>
          <p class="parrafo-ides"><img src="../recursos/discordicon.jpg" class="image-aplicacionesG" alt="..."><br>
            Discord es un servicio de mensajer??a instant??nea freeware de chat de voz VolP, video y chat por texto.
            Funciona a trav??s de servidores y est?? separado en canales
            de texto o de voz. Increiblemente util para la coordinacion de proyectos o hasta para jugar.
          </p>
        </th>
        <th scope="col"><a href="https://discord.com/api/downloads/distributions/app/installers/latest?channel=stable&platform=win&arch=x86"><button type="button" class="btn btn-outline-dark btn-margin">Descargar</button></a></th>
        <th scope="col"><a href="https://discord.com/"><button type="button" class="btn btn-outline-info">Pagina
              Oficial</button></a></th>


      </tr>

      <!-- STEAM -->
      <tr>
        <th scope="col">
          <h2 class="p-3 fs-2 p-3 fs-2 border-top border-bottom border-dark border-3">Steam</h2>
          <p class="parrafo-ides"><img src="../recursos/steamlogo.jpg" class="image-aplicacionesG" alt="..."><br>
            Steam es una plataforma de distribuci??n digital de videojuegos desarrollada por Valve Corporation. Fue
            lanzada en septiembre de 2003 como una forma para Valve
            de proveer actualizaciones autom??ticas a sus juegos, pero finalmente se ampli?? para incluir juegos de
            terceros.
          </p>
        </th>
        <th scope="col"><a href="https://store.steampowered.com/about/"><button type="button" class="btn btn-outline-dark btn-margin">Descargar</button></a></th>
        <th scope="col"><a href="https://store.steampowered.com/?l=spanish"><button type="button" class="btn btn-outline-info">Pagina
              Oficial</button></a></th>


      </tr>

      <!-- SPOTIFY -->
      <tr>
        <th scope="row">
          <h2 class="p-3 fs-2 p-3 fs-2 border-top border-bottom border-dark border-3">Spotify</h2>
          <p class="parrafo-ides"><img src="../recursos/spotifylogo.webp" class="image-aplicacionesG" alt="..."><br>
            Spotify es una empresa de servicios multimedia sueca fundada en 2006, cuyo producto es la aplicaci??n
            hom??nima empleada para la reproducci??n de m??sica v??a streaming.
          </p>
        </th>
        <th scope="col"><a href="https://www.spotify.com/ar/download/windows/"><button type="button" class="btn btn-outline-dark btn-margin">Descargar</button></a></th>
        <th scope="col"><a href="https://www.spotify.com/ar/"><button type="button" class="btn btn-outline-info">Pagina Oficial</button></a></th>

      </tr>

      <!-- ORIGIN -->
      <tr>
        <th scope="col">
          <h2 class="p-3 fs-2 p-3 fs-2 border-top border-bottom border-dark border-3">Origin</h2>
          <p class="parrafo-ides"><img src="../recursos/originlogo.png" class="image-aplicacionesG" alt="..."><br>
            Origin es una plataforma de distribuci??n digital desarrollada por Electronic Arts para comprar y jugar a
            videojuegos distribuidos o desarrollados por dicha compa????a.
            El cliente de software de la plataforma est?? disponible para PC y plataformas m??viles.
          </p>
        </th>
        <th scope="col"><a href="https://www.origin.com/arg/es-es/store/download"><button type="button" class="btn btn-outline-dark btn-margin">Descargar</button></a></th>
        <th scope="col"><a href="https://www.origin.com/arg/es-es/store"><button type="button" class="btn btn-outline-info">Pagina
              Oficial</button></a></th>

        <!-- FILA DE MAS PARA A??ADIR LA ULTIMA LINEA QUE QUEDE MAS LINDO-->
      <tr>
        <th scope="col">
          <h2 class="p-3 fs-2 p-3 fs-2 border-top border-dark border-3"></h2>
        </th>
      </tr>



      </tr>

      </tr>
    </thead>


    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="./js/main.js"></script>
</body>

</html>