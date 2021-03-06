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
  <title>Terror</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
            <a class="nav-link active" aria-current="page" href="./index.php">Inicio</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Aplicaciones
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="./paginas/Ides.php">Ides</a></li>
              <li><a class="dropdown-item" href="./paginas/aplicacionesG.php">Aplicaciones</a></li>
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
        <a href="https://store.steampowered.com/app/1721470/Poppy_Playtime/"><img src="../recursos/juegos/poppy.jpg" class="d-block w-100" height="800" width="500" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-bg-dark">Poppy Playtime</h5>
          <p class="text-bg-dark">Sumergite en una fabrica de jueguetes abandonada</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="https://store.steampowered.com/app/105600/Terraria/"><img src="../recursos/juegos/little.jpg" class="d-block w-100" height="800" width="500" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-bg-dark">Little Nightmares</h5>
          <p class="text-bg-dark">Emb??rcate en una l??gubre aventura</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="https://www.warframe.com/es"><img src="../recursos/juegos/Phasmophobia.jpg" class="d-block w-100" height="800" width="500" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-bg-dark">Phasmophobia</h5>
          <p class="text-bg-dark">El co-op de horror psicologico</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="https://store.steampowered.com/app/1599340/Lost_Ark/?l=latam"><img src="../recursos/juegos/freddy.jpeg" class="d-block w-100" height="800" width="500" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-bg-dark">Five Nights at Freddy's</h5>
          <p class="text-bg-dark">Cuida un salon de cumplea??os embrujado</p>
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
  <h1 class="text-center titulos blockquote fs-2">Terror</h1>

  <!-- TABLA DE IDES -->
  <table class="table-primary border-3 margin-table">

    <thead>
      <!-- POPPY PLAYTIME -->
      <tr>
        <th scope="col">
          <h2 class="p-3 fs-2 border-top border-bottom border-dark border-3">Poppy Playtime</h2>
          <p class="parrafo-ides"><img src="../recursos/juegos/poppy.jpg" class="image-accion" alt="..."><br>
            Poppy Playtime es un videojuego de terror y puzzles desarrollado y publicado por el desarrollador
            independiente MOB Games.
          </p>
        </th>
        <th scope="col"><a href="https://store.steampowered.com/app/1721470/Poppy_Playtime/?l=spanish"><button type="button" class="btn btn-outline-dark btn-margin">Descargar</button></a></th>
        <th scope="col"><a href="https://store.steampowered.com/app/1721470/Poppy_Playtime/?l=spanish"><button type="button" class="btn btn-outline-info">Pagina Oficial</button></a></th>


      </tr>

      <!-- Little Nightmares -->
      <tr>
        <th scope="col">
          <h2 class="p-3 fs-2 border-top border-bottom border-dark border-3">Little Nightmares</h2>
          <p class="parrafo-ides"><img src="../recursos/juegos/little.jpg" class="image-accion" alt="..."><br>
            Enfr??ntate a tus miedos de la infancia en esta oscura y extravagante historia, ambientada en un mundo
            inmersivo de gran sensibilidad, historia interactiva y destacado dise??o sonoro.
            Descubre los nauseabundos secretos de Las Fauces y sobrevive a las atenciones de sus monstruosos residentes
            mientras intentas ayudar a Six a escapar al mundo exterior.

          </p>
        </th>

        <th scope="col"><a href="https://es.bandainamcoent.eu/little-nightmares/little-nightmares"><button type="button" class="btn btn-outline-dark btn-margin">Descargar</button></a></th>
        <th scope="col"><a href="https://es.bandainamcoent.eu/little-nightmares/little-nightmares"><button type="button" class="btn btn-outline-info">Pagina
              Oficial</button></a></th>


      </tr>

      <!-- INTELLIJ IDEA -->
      <tr>
        <th scope="row">
          <h2 class="p-3 fs-2 border-top border-bottom border-dark border-3">Phasmophobia</h2>
          <p class="parrafo-ides"><img src="../recursos/juegos/Phasmophobia.jpg" class="image-accion" alt="..."><br>
            Phasmophobia es un videojuego de terror independiente desarrollado y publicado por Kinetic Games.
          </p>
        </th>
        <th scope="col"><a href="https://store.steampowered.com/app/739630/Phasmophobia/"><button type="button" class="btn btn-outline-dark btn-margin">Descargar</button></a></th>
        <th scope="col"><a href="https://store.steampowered.com/app/739630/Phasmophobia/"><button type="button" class="btn btn-outline-info">Pagina
              Oficial</button></a></th>

      </tr>

      <!-- NETBEANS -->
      <tr>
        <th scope="col">
          <h2 class="p-3 fs-2 border-top border-bottom border-dark border-3">Five Nights at Freddy's</h2>
          <p class="parrafo-ides"><img src="../recursos/juegos/freddy.jpeg" class="image-accion" alt="..."><br>
            Five Nights at Freddy's es una franquicia de medios basada en una serie de videojuegos de terror
            independientes, creada, dise??ada, desarrollada y publicada por Scott Cawthon
          </p>
        </th>
        <th scope="col"><a href="https://store.steampowered.com/app/319510/Five_Nights_at_Freddys/?l=spanish"><button type="button" class="btn btn-outline-dark btn-margin">Descargar</button></a></th>
        <th scope="col"><a href="https://store.steampowered.com/app/319510/Five_Nights_at_Freddys/?l=spanish"><button type="button" class="btn btn-outline-info">Pagina
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
  </table>


  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>