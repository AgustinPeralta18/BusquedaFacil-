<?php

    require('../php/conexion.php');

    //Recibimos datos de imagen

    $nombreImagen = $_FILES['imagen']['name'];

    $tipoImagen = $_FILES['imagen']['type'];

    $tamanioImagen = $_FILES['imagen']['size'];


    if($tamanioImagen<=1000000){
        if($tipoImagen == "image/jpeg" || $tipoImagen == "image/jpg" || $tipoImagen == "image/png" ||$tipoImagen == "image/gif" ){

            $carpetaDestino = $_SERVER['DOCUMENT_ROOT'].'/busquedaFacil--main/imagenes/';
            move_uploaded_file($_FILES['imagen']['tmp_name'],$carpetaDestino.$nombreImagen);
            header("Location: http://localhost/BusquedaFacil--main/index.php");

        } else{
            echo "solo puede subir imagenes jpeg,jpg,gif,png";
        }
    } else{
        echo "error";
    }

?>