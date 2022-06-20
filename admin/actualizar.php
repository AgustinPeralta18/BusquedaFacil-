<?php

include("../php/conexion.php");

if($_POST){
    $idusuario = $_POST['id'];
    $nombre = $_POST['Nombre'];
    $email = $_POST['Email'];
    $user = $_POST['Nickname'];
    
    try{
        $query_insert = mysqli_query($conexion, "UPDATE usuarios SET Nombre = '$nombre', Email = '$email', Nickname = '$user' WHERE id = '$idusuario'");
        echo json_encode(true);
    }catch(mysqli_sql_exception $err){
        echo json_encode(false);
    }
}

?>







