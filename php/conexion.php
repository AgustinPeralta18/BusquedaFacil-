<?php
//declaracion de las variables donde se guardaran los valores de la conexion

$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "usuarios";

try {
    $dbh = new PDO("mysql:host=$servidor;dbname=$bd", $usuario, $password);
} catch (Exception $e) {
    echo $e -> getMessage();
}

?>