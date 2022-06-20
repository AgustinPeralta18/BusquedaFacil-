

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
                            <li><a class="dropdown-item" href="./paginas/Ides.html">Ides</a></li>
                            <li><a class="dropdown-item" href="./paginas/aplicacionesG.html">Aplicaciones</a></li>
                        </ul>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light " href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Juegos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="./paginas/accion.html">Accion</a></li>
                            <li><a class="dropdown-item" href="./paginas/aventura.html">Aventura</a></li>
                            <li><a class="dropdown-item" href="./paginas/terror.html">Terror</a></li>
                            <li><a class="dropdown-item" href="./paginas/estrategia.html">Estrategia</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="./paginas/ayuda.html">Ayuda</a>
                    </li>
                </ul>

                <span class="navbar-text m-2">
                    <a href="../php/login.php">
                        
                    </a>
                </span>
                <span class="navbar-text m-2">
                    <a href="./admin/admin.html">
                        Administrar
                    </a>
                </span>



            </div>
        </div>
    </nav>

    <?php
    
    require(__DIR__ . '/table.php');

    ?>




    <!-- JS -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
    <script src="./js/main.js"></script>
    
</body>

</html>