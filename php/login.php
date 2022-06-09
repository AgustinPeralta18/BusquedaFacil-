<?php
    require_once('./conexion.php');
    //declaramos las variables email y password, llamamos al metodo post para verificar el usuario
    $email = $_POST['Email'];
    $password = $_POST['Contraseña'];

try{
    //Encriptacion unidireccional usando el algoritmo sha256
    $passwordHash = hash('sha256', $password);
    //Aca llamamos a la base de datos y seleccionamos id, email, password de la bd creada llamada usuarios
    $sql = "SELECT id, Email, Password FROM usuarios WHERE Email='$email';";
    //llamamos a la consulta
    $query = $dbh->prepare($sql);
    //ejecutamos la consulta
    $query->execute();
    //depositamos la respuesta en la variable result
    $result = $query->fetchAll();
    //control de errores (validaciones)
    if(!$result){
        throw new Error('Email o contraseña inválidos');
    }

    //accedemos a la variable bidimensional de NICKNAME de la bd
    $originPassword = $result[0]['Password'];
    //validaciones de la contrasenia
    if($originPassword !== $passwordHash){
        throw new Error('Email o contraseña inválidos'); 
    }

    //Si esta todo correcto direccionamos al usuario a la pagina principal
    header("Location:http://localhost/busquedaFacil--main");

}catch(Throwable $e){ //control de errores, EXCEPTION
    header("Location: http://localhost/busquedaFacil--main/login.html?error=true");
} 
    
?>