<?php
//CONEXION A PHP PURO Y DURO

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