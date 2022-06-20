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
  <title>Ides</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link rel="stylesheet" href="../css/estilos.css">
</head>

<body>


  <!-- FONDO DE LA PAGINA-->

  

  <!-- MENU -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid ">
      <a class="navbar-brand " href="../index.php">
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
              <li><a class="dropdown-item" href="./Ides.php">Ides</a></li>
              <li><a class="dropdown-item" href="./aplicacionesG.php">Aplicaciones</a></li>
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
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="https://code.visualstudio.com/"><img src="../recursos/vsfondo.png" class="d-block w-100" height="800" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-bg-dark">Visual Studio Code</h5>
          <p class="text-bg-dark">Uno de los mejores ides del mundo</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="https://www.sublimetext.com/"><img src="../recursos/sublimefondo.jpg" class="d-block w-100" height="800" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-bg-dark">Sublime Text</h5>
          <p class="text-bg-dark">Para tu programacion en desarrollo web</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="https://www.jetbrains.com/es-es/idea/"><img src="../recursos/javafondo.jpg" class="d-block w-100" height="800" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-bg-dark">IntelliJ IDEA</h5>
          <p class="text-bg-dark">El ide más usado para programar en Java</p>
        </div>
      </div>
      <div class="carousel-item">
        <a href="https://netbeans.apache.org/"><img src="../recursos/netbeansfondo.jpg" class="d-block w-100" height="800" alt="..."></a>
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-bg-dark">NetBeans</h5>
          <p class="text-bg-dark">Si te gusta la vieja escuela, tambien podes utilizar NetBeans</p>
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
  <h1 class="text-center titulos blockquote fs-2">EDITORES DE TEXTO</h1>

  <!-- TABLA DE IDES -->
  <table class="table-primary border-3 margin-table">

    <thead>
      <!-- VISUAL STUDIO CODE -->
      <tr>
        <th scope="col">
          <h2 class="p-3 fs-2 border-top border-bottom border-dark border-3">Visual Studio Code</h2>
          <p class="parrafo-ides"><img src="../recursos/Visual_Studio_Code.svg.png" class="image-ides" alt="..."><br>
            Visual Studio Code es un editor de texto para programar, es uno de los mas usados en el mundo. Este editor
            de texto tiene muchisimas funciones y es muy editable!
            Podes descargar temas, ayudas para la programacion en distintos lenguajes y hasta la conexion a servidores
            desde la misma aplicacion. Muy recomendable.
          </p>
        </th>
        <th scope="col"><a href="https://code.visualstudio.com/download"><button type="button"
              class="btn btn-outline-dark btn-margin">Descargar</button></a></th>
        <th scope="col"><a href="https://code.visualstudio.com/"><button type="button"
              class="btn btn-outline-info">Pagina Oficial</button></a></th>


      </tr>

      <!-- SUBLIME TEXT -->
      <tr>
        <th scope="col">
          <h2 class="p-3 fs-2 border-top border-bottom border-dark border-3">Sublime Text</h2>
          <p class="parrafo-ides"><img src="../recursos/sublime-text.png" class="image-ides" alt="..."><br>
            Sublime Text es un editor de texto y editor de código fuente. Está escrito en C++ y Python para los plugins.
            Desarrollado originalmente como una extensión de Vim, con el tiempo fue creando una identidad propia. Aún
            conserva un modo de edición tipo vi llamado Vintage mode.
          </p>
        </th>

        <th scope="col"><a href="https://download.sublimetext.com/sublime_text_build_4126_x64_setup.exe "><button
              type="button" class="btn btn-outline-dark btn-margin">Descargar</button></a></th>
        <th scope="col"><a href="https://www.sublimetext.com/"><button type="button" class="btn btn-outline-info">Pagina
              Oficial</button></a></th>


      </tr>

      <!-- INTELLIJ IDEA -->
      <tr>
        <th scope="row">
          <h2 class="p-3 fs-2 border-top border-bottom border-dark border-3">IntelliJ IDEA</h2>
          <p class="parrafo-ides"><img src="../recursos/intelij.png" class="image-ides" alt="..."><br>
            IntelliJ IDEA es un entorno de desarrollo integrado para el desarrollo de programas informáticos. Es
            desarrollado por JetBrains, y está disponible en dos ediciones:
            edición para la comunidad​ y edición comercial
          </p>
        </th>
        <th scope="col"><a
            href="https://www.jetbrains.com/es-es/idea/download/download-thanks.php?platform=windows&code=IIC"><button
              type="button" class="btn btn-outline-dark btn-margin">Descargar</button></a></th>
        <th scope="col"><a href="https://www.jetbrains.com/es-es/idea/"><button type="button"
              class="btn btn-outline-info">Pagina Oficial</button></a></th>

      </tr>

      <!-- NETBEANS -->
      <tr>
        <th scope="col">
          <h2 class="p-3 fs-2 border-top border-bottom border-dark border-3">NetBeans</h2>
          <p class="parrafo-ides"><img src="../recursos/netbeans.png" class="image-ides" alt="..."><br>
            NetBeans es un entorno de desarrollo integrado libre, hecho principalmente para el lenguaje de programación
            Java. Existe además un número importante de
            módulos para extenderlo. NetBeans IDE​ es un producto libre y gratuito sin restricciones de uso.
          </p>
        </th>
        <th scope="col"><a
            href="https://www.apache.org/dyn/closer.cgi/netbeans/netbeans-installers/13/Apache-NetBeans-13-bin-windows-x64.exe"><button
              type="button" class="btn btn-outline-dark btn-margin">Descargar</button></a></th>
        <th scope="col"><a href="https://netbeans.apache.org/"><button type="button" class="btn btn-outline-info">Pagina
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

  <!--BOOTSTRAP-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
  crossorigin="anonymous"></script>
  <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
  <script src="../js/buscador.js"></script>
</body>

</html>