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
    $sql = mysqli_query($conexion, "SELECT id, Email, tipoUsuario, Password FROM usuarios WHERE Email='$email';");

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

    $_SESSION['usuario'] = "$result";


    if (mysqli_num_rows($sql) > 0) {
        if ($_SESSION['Email'] = $email !== 'Reynaldo@gmail.com') {
            header("location: http://localhost/busquedaFacil--main/admin/admin.php");
        } else {
            header("location: http://localhost/busquedaFacil--main/index.php");
        }
    } else {
        echo '
        <script>
            alert("Usuario o contraseña erroneo");
            window.location= "../index.php";
        </script>
    
        ';
    }
} catch (Throwable $e) { //control de errores, EXCEPTION
    header("Location: http://localhost/busquedaFacil--main/login.html?error=true");
}
