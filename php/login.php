<?php
require_once('./conexion.php');
//declaramos las variables email y password, llamamos al metodo post para verificar el usuario
$email = $_POST['Email'];
$password = $_POST['Contraseña'];
session_start();

try {
    //Encriptacion unidireccional usando el algoritmo sha256
    $passwordHash = hash('sha256', $password);
    //Aca llamamos a la base de datos y seleccionamos id, email, password de la bd creada llamada usuarios
    $sql = mysqli_query($conexion, "SELECT id, Email, Password FROM usuarios WHERE Email='$email';");

    //depositamos la respuesta en la variable result
    $result = $sql->fetch_assoc();
    //control de errores (validaciones)
    if (!$result) {
        throw new Error('Email o contraseña inválidos');
    }

    //accedemos a la variable bidimensional de NICKNAME de la bd
    $originPassword = $result['Password'];
    //validaciones de la contrasenia
    if ($originPassword !== $passwordHash) {
        throw new Error('Email o contraseña inválidos');
    }

    

    $_SESSION['Admin'] = false;
    if (strcmp($result['Email'], 'Reynaldo@gmail.com') == 0) {
        $_SESSION['Admin'] = true;
    }

    $_SESSION['Email'] = $result['Email'];
    

    header('Location: http://localhost/busquedaFacil--main/index.php');
    
} catch (Throwable $e) { //control de errores, EXCEPTION
    header("Location: http://localhost/busquedaFacil--main/login.html?error=true");
}
