<?php



session_start();
if(!isset($_SESSION['Email'])){
  header('Location:http://localhost/busquedaFacil--main/login.html');
}




?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BusquedaFacil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/estilos.css">

</head>

<body>

  <!-- Encabezado -->


  <!-- MENU -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.php">
        <img src="./recursos/busqueda.png" alt="" width="24" height="24" class="d-inline-block align-text-top">
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
              <li><a class="dropdown-item" href="./paginas/accion.php">Accion</a></li>
              <li><a class="dropdown-item" href="./paginas/aventura.php">Aventura</a></li>
              <li><a class="dropdown-item" href="./paginas/terror.php">Terror</a></li>
              <li><a class="dropdown-item" href="./paginas/estrategia.php">Estrategia</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="./paginas/ayuda.php">Ayuda</a>
          </li>
        </ul>

        <span class="navbar-text m-2">
          <a href="./php/desconectar.php">

            Desconectar

          </a>

        </span>
        <span class="navbar-text m-2">

          
          <a href="./admin/admin.php">
            Administrar
          </a>
        </span>


      </div>
    </div>
  </nav>

  <!-- Fondo Imagenes-->

  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="5000">
        <img src="./recursos/applicaciones.jpg" width="150" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="./recursos/juegos.jpg" width="150" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="./recursos/software.jpg" width="150" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Introduccion-->

  <section class="w-50 mx-auto text-center pt-5" id="intro">
    <h1 class="p-3 fs-2 border-top border-bottom border-dark border-3">La mejor p??gina para tus <span class="text-bg-dark">descargas</span></h1>
    <p class="p-3 fs-4"><span class="text-bg-dark">BusquedaFacil</span> Es una pagina en la cual podes
      encontrar cualquier instalador de aplicaciones/juegos/ides.</p>
  </section>

  <!-- Mapa -->

  <div id="local" class="border-top border-bottom border-4">
    <div class="mapa"></div>
    <div>
      <div class="wrapper">
        <h2 class="text-danger mb-4" id="typewriter"></h2>
        <p class="fs-5 text-body"></p>
        <section class="d-flex" id="numeros-local">
          <div>
            <p class="text-danger fs-5">Ubicacion:</p>
            <p>Mendoza, Argentina</p>
            <p class="text-danger fs-5">Carrera:</p>
            <p>Lic. En informatica y desarrollo en software</p>
            <p class="text-danger fs-5">A??o:</p>
            <p>Segundo</p>
            <p class="text-danger fs-5">Materia:</p>
            <p>Laboratorio III</p>

          </div>
        </section>
      </div>
    </div>
  </div>


  <!-- Comentario abajo del mapa-->

  <section class="w-50 mx-auto text-center pt-5" id="intro">
    <h1 class="p-3 fs-2 border-top border-bottom border-dark border-3">Espero les guste!</h1>
  </section>

  <!-- Seccion Final -->

  <section id="seccion-final" class="border-bottom border-second ">
    <div id="bg-final">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#273036" fill-opacity="1" d="M0,224L24,202.7C48,181,96,139,144,106.7C192,75,240,53,288,53.3C336,53,384,75,432,90.7C480,107,528,117,576,149.3C624,181,672,235,720,224C768,213,
        816,139,864,133.3C912,128,960,192,1008,229.3C1056,267,1104,277,1152,234.7C1200,192,1248,96,1296,64C1344,32,1392,64,1416,80L1440,96L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,
        320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,
        24,320L0,320Z"></path>
      </svg>
    </div>
  </section>



  <!-- JS -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>