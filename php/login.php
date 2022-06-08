<?php
    require_once('./conexion.php');

    $email = $_POST['Email'];
    $password = $_POST['Contraseña'];

try{
    $passwordHash = hash('sha256', $password);

    $sql = "SELECT id, Email, Password FROM usuarios WHERE Email='$email';";
    $query = $dbh->prepare($sql);
    $query->execute();

    $result = $query->fetchAll();
    
    if(!$result){
        throw new Error('Email o contraseña inválidos');
    }

    $originPassword = $result[0]['Password'];

    if($originPassword !== $passwordHash){
        throw new Error('Email o contraseña inválidos'); 
    }

    header("Location:http://localhost/busquedaFacil--main");

}catch(Throwable $e){
    header("Location: http://localhost/busquedaFacil--main/login.html?error=true");
} 
    
?>