<?php

require_once('./conexion.php');

$name = $_POST['Nombre'];
$nickname = $_POST['Nickname'];
$email =$_POST['Email'];
$password = $_POST['Contraseña'];

try{
    $passwordHash = hash('sha256', $password, false);
    //en caso de necesitar validaciones, hacerlas aquí.
    $sql = "INSERT INTO usuarios (Nombre, Nickname, Email, Password) VALUES ('$name', '$nickname', '$email', '$passwordHash');";
    
    $query = $dbh->prepare($sql);
    $query->execute();

    header("Location:http://localhost/busquedaFacil--main/login.html");
}catch(PDOException $e){
    echo "Error en la base de datos: " . $e->getMessage();
    header("Location:http://localhost/busquedaFacil--main/register.html");
}catch(Exception $e){
    echo "Error al enviar los datos: " . $e->getMessage();
    header("Location:http://localhost/busquedaFacil--main/register.html");
}


?>

