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
  <title>Accion</title>
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
            <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
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
        <a href="https://store.steampowered.com/app/730/CounterStrike_Global_Offensive/"><img
            src="../recursos/juegos/cs_go_chamada.jpg" class="d-block w-100" height="800" width="500" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-bg-dark">Counter-Strike Global Offensive</h5>
          <p class="text-bg-dark">El clasico de accion</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="https://warthunder.com/es/"><img src="../recursos/juegos/warthunder.jpg" class="d-block w-100"
            height="800" width="500" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-bg-dark">War Thunder</h5>
          <p class="text-bg-dark">Sumergite en la Segunda Guerra Mundial</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="https://pivigames.blog/wwolfenstein-the-new-order/"><img src="../recursos/juegos/wolfestein.jpg"
            class="d-block w-100" height="800" width="500" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-bg-dark">Wolfestein</h5>
          <p class="text-bg-dark">Unete a la revolucion</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="https://store.steampowered.com/app/440/Team_Fortress_2/"><img
            src="../recursos/juegos/Team-Fortress-2-logo.png" class="d-block w-100" height="800" width="500"
            alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-bg-dark">Team Fortress 2</h5>
          <p class="text-bg-dark">El clasico de toda la vida</p>
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
  <h1 class="text-center titulos blockquote fs-2">Accion</h1>

  <!-- TABLA DE IDES -->
  <table class="table-primary border-3 margin-table">

    <thead>
      <!-- CSGO -->
      <tr>
        <th scope="col">
          <h2 class="p-3 fs-2 border-top border-bottom border-dark border-3">Counter-Strike Global Offensive</h2>
          <p class="parrafo-ides"><img src="../recursos/juegos/csgo.png" class="image-accion" alt="..."><br>
            Counter-Strike: Global Offensive es un videojuego de disparos en primera persona desarrollado por Valve Corporation y Hidden Path Entertainment.
          </p>
        </th>
        <th scope="col"><a href="https://store.steampowered.com/app/730/CounterStrike_Global_Offensive/"><button type="button"
              class="btn btn-outline-dark btn-margin">Descargar</button></a></th>
        <th scope="col"><a href="https://blog.counter-strike.net/es/"><button type="button"
              class="btn btn-outline-info">Pagina Oficial</button></a></th>


      </tr>

      <!-- WAR THUNDER -->
      <tr>
        <th scope="col">
          <h2 class="p-3 fs-2 border-top border-bottom border-dark border-3">War Thunder</h2>
          <p class="parrafo-ides"><img src="../recursos/juegos/warthunder.jpg" class="image-accion" alt="..."><br>
            War Thunder es un videojuego de combate aéreo, terrestre y naval, preferentemente arcade, aunque pudiendo el jugador si lo desea, elegir una modalidad 
            realista o simulada de jugabilidad.
          </p>
        </th>

        <th scope="col"><a href="https://warthunder.com/es/"><button
              type="button" class="btn btn-outline-dark btn-margin">Descargar</button></a></th>
        <th scope="col"><a href="https://warthunder.com/es/"><button type="button" class="btn btn-outline-info">Pagina
              Oficial</button></a></th>


      </tr>

      <!-- TEAM FORTRESS 2 -->
      <tr>
        <th scope="row">
          <h2 class="p-3 fs-2 border-top border-bottom border-dark border-3">Team Fortress 2</h2>
          <p class="parrafo-ides"><img src="../recursos/juegos/Team-Fortress-2-logo.png" class="image-accion" alt="..."><br>
            IntelliJ IDEA es un entorno de desarrollo integrado para el desarrollo de programas informáticos. Es
            desarrollado por JetBrains, y está disponible en dos ediciones:
            edición para la comunidad​ y edición comercial
          </p>
        </th>
        <th scope="col"><a
            href="https://store.steampowered.com/app/440/Team_Fortress_2/"><button
              type="button" class="btn btn-outline-dark btn-margin">Descargar</button></a></th>
        <th scope="col"><a href="https://www.teamfortress.com/"><button type="button"
              class="btn btn-outline-info">Pagina Oficial</button></a></th>

      </tr>

      <!-- WOLFESTEIN -->
      <tr>
        <th scope="col">
          <h2 class="p-3 fs-2 border-top border-bottom border-dark border-3">Wolfestein</h2>
          <p class="parrafo-ides"><img src="../recursos/juegos/wolfestein.jpg" class="image-accion" alt="..."><br>
            Wolfenstein es una serie de videojuegos de la Segunda Guerra Mundial desarrollados originalmente por Muse Software. La mayoría de los juegos siguen a William "B.J." 
            Blazkowicz, un capitán del ejército judío polaco-estadounidense y su lucha contra las potencias del Eje.
          </p>
        </th>
        <th scope="col"><a
            href="https://pivigames.blog/wwolfenstein-the-new-order/"><button
              type="button" class="btn btn-outline-dark btn-margin">Descargar</button></a></th>
        <th scope="col"><a href="https://store.steampowered.com/app/201810/Wolfenstein_The_New_Order/"><button type="button" class="btn btn-outline-info">Pagina
              Oficial</button></a></th>

        <!-- FILA DE MAS PARA AÑADIR LA ULTIMA LINEA QUE QUEDE MAS LINDO-->
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