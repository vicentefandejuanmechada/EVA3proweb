<?php 
    include '../model/alumno.php';
    //recibe los datos del formulario
    $rut = $_POST['rut'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $carrera = $_POST['carrera'];

    //inserta los datos en la base de datos
    $result = insertarAlumno($rut, $nombre, $apellido, $carrera);

    die($result);
?>