<?php 
    include '../model/carrera.php';
    //recibe los datos del formulario
    $carrera = $_POST['nombre'];
    $result = insertarCarrera($carrera);
    die($result);
?>