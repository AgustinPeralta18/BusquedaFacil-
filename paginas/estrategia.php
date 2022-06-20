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
  <title>Estrategia</title>
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
        <a href="https://store.steampowered.com/app/394360/Hearts_of_Iron_IV/"><img src="../recursos/juegos/heartsofiron.jpg"
            class="d-block w-100" height="800" width="500" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-bg-dark">Hearts Of Iron IV</h5>
          <p class="text-bg-dark">Elige cualquier pais y conquista el mundo!</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="https://store.steampowered.com/app/214950/Total_War_ROME_II__Emperor_Edition/"><img src="../recursos/juegos/totalwar.jpeg"
            class="d-block w-100" height="800" width="500" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-bg-dark">Total War: Rome 2</h5>
          <p class="text-bg-dark">Conquista el mundo antiguo</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="https://store.steampowered.com/app/919640/Steel_Division_2/?l=spanish"><img src="../recursos/juegos/steel.jpg" class="d-block w-100"
            height="800" width="500" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-bg-dark">Steel Division 2</h5>
          <p class="text-bg-dark">Steel Division 2 desafía los límites de la experiencia de estrategia en tiempo real</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="https://store.steampowered.com/app/236850/Europa_Universalis_IV/"><img src="../recursos/juegos/europauniversalis.jpg"
            class="d-block w-100" height="800" width="500" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-bg-dark">Europa Universalis IV</h5>
          <p class="text-bg-dark">Gobierna tu territorio y domina el mundo con una libertad</p>
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
  <h1 class="text-center titulos blockquote fs-2">Estrategia</h1>

  <!-- TABLA DE IDES -->
  <table class="table-primary border-3 margin-table">

    <thead>
      <!-- HEARTS OF IRON IV -->
      <tr>
        <th scope="col">
          <h2 class="p-3 fs-2 border-top border-bottom border-dark border-3">Hearts Of Iron IV</h2>
          <p class="parrafo-ides"><img src="../recursos/juegos/heartsofiron.jpg" class="image-accion" alt="..."><br>
            ¡Tenemos la victoria al alcance de la mano! 
            Tu capacidad para liderar tu nación es tu arma principal. En el juego de estrategia Hearts of Iron IV podrás
            ponerte el mando de cualquier nación de la II Guerra Mundial, el conflicto más fascinante de la historia mundial. 
          </p>
        </th>
        <th scope="col"><a href="https://store.steampowered.com/app/394360/Hearts_of_Iron_IV/"><button
              type="button" class="btn btn-outline-dark btn-margin">Descargar</button></a></th>
        <th scope="col"><a href="https://store.steampowered.com/app/394360/Hearts_of_Iron_IV/"><button
              type="button" class="btn btn-outline-info">Pagina Oficial</button></a></th>


      </tr>

      <!-- TOTAL WAR -->
      <tr>
        <th scope="col">
          <h2 class="p-3 fs-2 border-top border-bottom border-dark border-3">Total War: Rome 2</h2>
          <p class="parrafo-ides"><img src="../recursos/juegos/totalwar.jpeg" class="image-accion" alt="..."><br>
            Contiene un sistema político mejorado, cadenas de construcción renovadas, batallas reequilibradas y mejores gráficos tanto en campaña como en batalla. 
          </p>
        </th>

        <th scope="col"><a href="https://store.steampowered.com/app/214950/Total_War_ROME_II__Emperor_Edition/"><button type="button"
              class="btn btn-outline-dark btn-margin">Descargar</button></a></th>
        <th scope="col"><a href="https://store.steampowered.com/app/214950/Total_War_ROME_II__Emperor_Edition/"><button type="button"
              class="btn btn-outline-info">Pagina
              Oficial</button></a></th>


      </tr>

      

      <!-- STEEL DIVISION -->
      <tr>
        <th scope="col">
          <h2 class="p-3 fs-2 border-top border-bottom border-dark border-3">Steel Division</h2>
          <p class="parrafo-ides"><img src="../recursos/juegos/steel.jpg" class="image-accion" alt="..."><br>
            Steel Division 2 es un juego de estrategia en tiempo real ambientado en el frente oriental durante la Segunda Guerra Mundial. 
            Incorpora gestión del ejército por turnos a escala 1:1 y batallas tácticas en tiempo real con miles de hombres a tus órdenes. 
          </p>
        </th>
        <th scope="col"><a href="https://store.steampowered.com/app/919640/Steel_Division_2/"><button
              type="button" class="btn btn-outline-dark btn-margin">Descargar</button></a></th>
        <th scope="col"><a href="https://store.steampowered.com/app/919640/Steel_Division_2/"><button
              type="button" class="btn btn-outline-info">Pagina
              Oficial</button></a>
      </th>

      <!-- EUROPA UNIVERSALIS IV -->
      <tr>
        <th scope="row">
          <h2 class="p-3 fs-2 border-top border-bottom border-dark border-3">Europa Universalis IV</h2>
          <p class="parrafo-ides"><img src="../recursos/juegos/europauniversalis.jpg" class="image-accion" alt="..."><br>
            Europa Universalis IV te permite controlar una nación a lo largo de cuatro siglos dramáticos. Gobierna tu territorio y domina el mundo con una libertad, una profundidad y 
            una precisión histórica sin precedentes. Reescribe la historia del mundo y construye un imperio para la posteridad. 
          </p>
        </th>
        <th scope="col"><a href="https://store.steampowered.com/app/236850/Europa_Universalis_IV/"><button type="button"
              class="btn btn-outline-dark btn-margin">Descargar</button></a></th>
        <th scope="col"><a href="https://store.steampowered.com/app/236850/Europa_Universalis_IV/"><button type="button"
              class="btn btn-outline-info">Pagina
              Oficial</button></a></th>

      </tr>

      


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