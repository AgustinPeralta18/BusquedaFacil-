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
    <title>Terror</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/ayuda.css">
</head>

<body>
    <!-- MENU -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">
                <img src="../recursos/busqueda.png" alt="" width="24" height="24" class="d-inline-block align-text-top">
                Busqueda Facil
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarScrollingDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Aplicaciones
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="./paginas/Ides.php">Ides</a></li>
                            <li><a class="dropdown-item" href="./paginas/aplicacionesG.php">Aplicaciones</a></li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light " href="#" id="navbarScrollingDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                        <a class="nav-link active" href="#">Ayuda</a>
                    </li>

                </ul>

                
            </div>
        </div>
    </nav>

    <!-- Informacion -->

        

    <div class="accordion p-5" id="accordionExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              Informacion sobre mi:
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                Mi nombre es: <strong>Agustin Peralta</strong>, tengo 20 a??os, estudio en la Universidad del Aconcagua y estoy cursando 2do a??o. Me gusta mucho el back-end y todo lo que viene siendo con la "parte
                de atras" de un programa. Fui al Liceo Militar General Espejo y me egres?? en 2019.
                En <strong>2020</strong> en medio de la pandemia todav??a no sabia que estudiar, un amigo me recomend?? este "mundo", me encant??, desde 2020 que estoy programando y aprendiendo. <br>
                No fu?? nada facil entender la l??gica de la programaci??n en s?? pero con el tiempo fui entendiendo hasta el d??a de hoy.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
              Sobre la p??gina:
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <strong>Busqueda Facil</strong> Es una p??gina donde se puede buscar de todo, desde IDES hasta juegos. <br>
              En esta p??gina se utiliza en su mayor??a <strong>Bootstrap</strong>.
            </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
              Contacto:
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
            <div class="accordion-body m-2">
              <a href="https://www.instagram.com/aguspalta/"><img src="../recursos/instagram.png" width="50px" alt=""></a>
              <strong>Instagram:</strong> @aguspalta
            </div>
            <div class="accordion-body m-2">
                <a href="https://twitter.com/AgusPalta"><img src="../recursos/twitter.png" width="50px" alt=""></a>
                <strong>Twitter:</strong> @aguspalta
              </div>
          </div>
          <a href="https://www.youtube.com/watch?v=4jmii-uN9fw&ab_channel=stranger-"><img src="../recursos/lil.jpg" width="900px" height="900px" class="float-start" alt="..."></a>
          <a href="https://www.youtube.com/watch?v=sNPnbI1arSE&ab_channel=EminemVEVO"><img src="../recursos/eminem.jpg" width="905px" height="900px" class="float-end" alt="..."></a>
        </div>
      </div>
    







    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="./js/main.js"></script>




</body>

</html>