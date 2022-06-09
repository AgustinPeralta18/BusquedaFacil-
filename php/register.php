<?php

require_once('./conexion.php');
//Declaramos variables y traemos la info de hmtl para subirlo a la bd de php
$name = $_POST['Nombre'];
$nickname = $_POST['Nickname'];
$email =$_POST['Email'];
$password = $_POST['Contraseña'];

try{
    //Encriptacion unidireccional usando el algoritmo sha256
    $passwordHash = hash('sha256', $password, false);
    //Aca llamamos a la base de datos y seleccionamos id, email, password de la bd creada llamada usuarios
    $sql = "INSERT INTO usuarios (Nombre, Nickname, Email, Password) VALUES ('$name', '$nickname', '$email', '$passwordHash');";
    //llamamos a la consulta
    $query = $dbh->prepare($sql);
    //ejecutamos la consulta
    $query->execute();
    //Cuando se termina el registro y no hay ningun lo mandamos a la pagina de login
    header("Location:http://localhost/busquedaFacil--main/login.html");
}catch(PDOException $e){//Control de errores
    echo "Error en la base de datos: " . $e->getMessage();
    header("Location:http://localhost/busquedaFacil--main/register.html");
}catch(Exception $e){
    echo "Error al enviar los datos: " . $e->getMessage();
    header("Location:http://localhost/busquedaFacil--main/register.html");
}


?>

