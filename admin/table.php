<?php

include("../php/conexion.php");






$pagina = 1;
/* 
Aca obtenemos el numero de paginas de la query de la url (?pagina=2)
*/
if (isset($_GET['pagina'])) { //si existe almacena pagina sino sigue siendo 1 por defecto
    $pagina = $_GET['pagina'];
}

$max = 3; //maximo de resultados que se van a mostrar
$comienzo = ($pagina - 1) * $max; //desde donde empieza a filtrar la base de datos

$query = mysqli_query($conexion, "SELECT * FROM usuarios"); //necesitamos la cantidad de usuarios de la base de datos para sacar el numero de paginas

$cantidad = mysqli_num_rows($query); //haces que mysqli cuente cuantas filas hay en el query

$maxPaginas = ceil($cantidad / $max);  //con ceil redondeas para arriba, por el for



$usuarios = "SELECT * FROM usuarios LIMIT $comienzo,$max"; // Limit comienzo en 3, max 3 porque vamos a decir cuantos lugares aparecen 



?>



<!--TABLA DE USUARIOS PARA ADMINISTRAR-->
<table class="table">

    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Nombre de Usuario</th>
            <th scope="col">Email</th>
            <th scope="col">Seleccionar</th>

        </tr>
    </thead>
    <tbody>
        <?php $resultado = mysqli_query($conexion, $usuarios);

        while ($row = mysqli_fetch_assoc($resultado)) {
            $id = $row['id'];

            $oldName = $row['Nombre'];
            $oldNickname = $row['Nickname'];
            $oldEmail = $row['Email'];

            echo '<tr>';
            echo '<th scope="row">' . $row["id"] . '</th>';
            echo '<td id="' . $oldName . '">' . $row["Nombre"] . '</td>';
            echo '<td id="' . $oldNickname . ' ">' . $row["Nickname"] . '</td>';
            echo '<td id="' . $oldEmail . '">' . $row["Email"] . '</td>';
            echo '<td>';
            echo '<div class="d-grid gap-2 d-md-flex">';
            echo '<button onclick="' . "editUser('$id','$oldName', '$oldNickname', '$oldEmail')" . '">Editar</button>';
            echo '<a href="eliminar.php?id=' . $row["id"] . ' class="delete">Eliminar</a>';
            echo '</td>';
            echo '</div>';
            echo '</tr>';
        }
        ?>



    </tbody>
</table>

<footer>
    <nav aria-label="...">
        <ul class="pagination pagination-sm">
            <?php
            if ($pagina > 1) {
                for ($i = 1; $i < $pagina; $i++) { //esto para dibujar las paginas anteriores a la pagina actual, o sea que aparezcan 1 2 
            ?>
                    <li class="page-item"><a class="page-link" href="http://localhost/busquedaFacil--main/admin/admin.php?pagina=<?php echo $i ?>"><?php echo $i ?></a></li>
            <?php
                }
            }
            ?>
            <li class="page-item active" aria-current="page">
                <span class="page-link"><?php echo $pagina ?></span>
            </li>
            <?php
            
                for ($i = $pagina+1; $i < $maxPaginas+1; $i++) { //esto para dibujar pagina siguiente 
            ?>
                    <li class="page-item"><a class="page-link" href="http://localhost/busquedaFacil--main/admin/admin.php?pagina=<?php echo $i ?>"><?php echo $i ?></a></li>
            <?php
                }
            
            ?>

            
        </ul>
    </nav>
</footer>

<script>
        async function editUser(id, oldName, oldNickname, oldEmail) {
            console.log(id, oldName, oldNickname, oldEmail);
            
            const name = prompt("Inserte el nuevo nombre");
            const nickname = prompt("Inserte el nuevo nickname");
            const email = prompt("Inserte el nuevo email");

            let data = new FormData();

            data.set('id', id);
            data.set('Nombre', name);
            data.set('Nickname', nickname);
            data.set('Email', email);

            let response = await fetch('http://localhost/busquedaFacil--main/admin/actualizar.php', {
                method: "POST",
                body: data
            });

            if(!response){
                alert("te la mandaste");
            }

            document.getElementById(`${oldName}`).innerText = name;
            document.getElementById(`${oldNickname}`).innerText = nickname;
            document.getElementById(`${oldEmail}`).innerText = email;

        }
    </script>


