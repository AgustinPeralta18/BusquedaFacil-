<?php



session_start();
if(!isset($_SESSION['Email'])){
  echo'
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
  <title>Aventura</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.php">Inicio</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarScrollingDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Aplicaciones
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="./paginas/Ides.php">Ides</a></li>
              <li><a class="dropdown-item" href="./paginas/aplicacionesG.php">Aplicaciones</a></li>
            </ul>
          </li>


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light " href="#" id="navbarScrollingDropdown" role="button"
              data-bs-toggle="dropdown" aria-expanded="false">
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
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
        aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="https://www.minecraft.net/es-es"><img src="../recursos/juegos/minecraft.jpeg" class="d-block w-100"
            height="800" width="500" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-bg-dark">Minecraft</h5>
          <p class="text-bg-dark">Explora un mundo infinito</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="https://store.steampowered.com/app/105600/Terraria/"><img src="../recursos/juegos/terraria.jpg"
            class="d-block w-100" height="800" width="500" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-bg-dark">Terraria</h5>
          <p class="text-bg-dark">Sumergite en un mundo 2D con muchisimos monstruos</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="https://www.warframe.com/es"><img src="../recursos/juegos/warframe.jpg" class="d-block w-100"
            height="800" width="500" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-bg-dark">Warframe</h5>
          <p class="text-bg-dark">Completa misiones y salva a la galaxia</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="https://store.steampowered.com/app/1599340/Lost_Ark/?l=latam"><img src="../recursos/juegos/lostark.jpg"
            class="d-block w-100" height="800" width="500" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-bg-dark">Lost Ark</h5>
          <p class="text-bg-dark">El RPG MMO con todo un mundo para aventurarse </p>
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
  <h1 class="text-center titulos blockquote fs-2">Aventura</h1>

  <!-- TABLA DE IDES -->
  <table class="table-primary border-3 margin-table">

    <thead>
      <!-- MINECRAFT -->
      <tr>
        <th scope="col">
          <h2 class="p-3 fs-2 border-top border-bottom border-dark border-3">Minecraft</h2>
          <p class="parrafo-ides"><img src="../recursos/juegos/minecraft.jpeg" class="image-accion" alt="..."><br>
            Minecraft es un videojuego de construcci??n de tipo ??mundo abierto?? o sandbox creado originalmente por el
            sueco Markus Persson, y
            posteriormente desarrollado por Mojang Studios.
          </p>
        </th>
        <th scope="col"><a
            href="https://launcherfenix.com.ar/download?u=https%3A%2F%2Ffiles.launcherfenix.com.ar%2Fprelauncher%2Fv7%2FLauncherFenix-Minecraft-v7.exe&f=LauncherFenixV7.exe&n=PreLauncherV7_EXE_Local&c"><button
              type="button" class="btn btn-outline-dark btn-margin">Descargar</button></a></th>
        <th scope="col"><a href="https://www.minecraft.net/es-es"><button type="button"
              class="btn btn-outline-info">Pagina Oficial</button></a></th>


      </tr>

      <!-- TERRARIA -->
      <tr>
        <th scope="col">
          <h2 class="p-3 fs-2 border-top border-bottom border-dark border-3">Terraria</h2>
          <p class="parrafo-ides"><img src="../recursos/juegos/terraria.jpg" class="image-accion" alt="..."><br>
            Terraria es un videojuego de acci??n, aventura y de sandbox producido de forma independiente por el estudio
            Re-Logic.
            Tiene caracter??sticas tales como la exploraci??n, la artesan??a, la construcci??n de estructuras y el combate.
          </p>
        </th>

        <th scope="col"><a href="https://store.steampowered.com/app/105600/Terraria/"><button type="button"
              class="btn btn-outline-dark btn-margin">Descargar</button></a></th>
        <th scope="col"><a href="https://store.steampowered.com/app/105600/Terraria/"><button type="button"
              class="btn btn-outline-info">Pagina
              Oficial</button></a></th>


      </tr>

      <!-- WARFRAME -->
      <tr>
        <th scope="row">
          <h2 class="p-3 fs-2 border-top border-bottom border-dark border-3">Warframe</h2>
          <p class="parrafo-ides"><img src="../recursos/juegos/warframe.jpg" class="image-accion" alt="..."><br>
            Warframe es un videojuego de disparos en tercera persona gratuito de modalidad jugador contra entorno
            individual o cooperativo,
            aunque posee una modalidad jugador contra jugador en los modos de juego conocidos como C??nclave, y Lunaro.
          </p>
        </th>
        <th scope="col"><a href="https://store.steampowered.com/app/230410/Warframe/"><button type="button"
              class="btn btn-outline-dark btn-margin">Descargar</button></a></th>
        <th scope="col"><a href="https://www.warframe.com/es"><button type="button" class="btn btn-outline-info">Pagina
              Oficial</button></a></th>

      </tr>

      <!-- LOST ARK -->
      <tr>
        <th scope="col">
          <h2 class="p-3 fs-2 border-top border-bottom border-dark border-3">Lost Ark</h2>
          <p class="parrafo-ides"><img src="../recursos/juegos/lostark.jpg" class="image-accion" alt="..."><br>
            Lost Ark es un juego de rol de acci??n multijugador masivo en l??nea de fantas??a en 2,5D.?????? Est??
            codesarrollado por Tripod Studio y
            la filial de desarrollo de juegos Smilegate RPG
          </p>
        </th>
        <th scope="col"><a href="https://store.steampowered.com/app/1599340/Lost_Ark/?l=latam"><button type="button"
              class="btn btn-outline-dark btn-margin">Descargar</button></a></th>
        <th scope="col"><a href="https://store.steampowered.com/app/1599340/Lost_Ark/?l=latam"><button type="button"
              class="btn btn-outline-info">Pagina
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
  <script src="./js/main.js"></script>
</body>


</html>