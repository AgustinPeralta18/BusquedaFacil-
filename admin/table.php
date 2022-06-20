<?php

include("../php/conexion.php");

$usuarios = "SELECT * FROM usuarios";



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
            echo '<td id="'. $oldEmail .'">' . $row["Email"] . '</td>';
            echo '<td>';
            echo '<div class="d-grid gap-2 d-md-flex justify-content-md-end">';
            echo '<a onclick="' . "editUser($id,$oldName, $oldNickname, $oldEmail)" . '">Editar</a>';
            echo '<a href="eliminar.php?id='.$row["id"].' class="delete">Eliminar</a>';
            echo '</td>';
            echo '</div>';
            echo '</tr>';
        }
        ?>

    </tbody>
</table>

<script>
    async function editUser(id, oldName, oldNickname, oldEmail){
        const name = prompt("Inserte el nuevo nombre");     
        const nickname = prompt("Inserte el nuevo nickname");
        const email = prompt("Inserte el nuevo email");

        let data = new FormData();

        data.set('id', id);
        data.set('Nombre', name);
        data.set('Nickname', nickname);
        data.set('Email', email); 

        let response = await fetch('http://localhost/busquedaFacil--main/admin/actualizar.php', {method: "POST", body:data});

        let body = await response.json();
    }
</script>