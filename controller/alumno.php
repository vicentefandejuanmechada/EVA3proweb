<?php
include '../model/alumno.php';
//recibe los datos del formulario
if (isset($_POST['op'])) {
    $op = $_POST['op'];
    if ($op == 'insert') {
        $rut = $_POST['rut'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $carrera = $_POST['carrera'];

        //inserta los datos en la base de datos
        $result = insertarAlumno($rut, $nombre, $apellido, $carrera);
        header('Location: ../views/alumno.php');
        exit();
    } else if ($op == 'update') {
        $id = $_POST['id'];
        $rut = $_POST['rut'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $carrera = $_POST['carrera'];

        //actualiza los datos en la base de datos
        $result = updateAlumno($id, $rut, $nombre, $apellido, $carrera);
        header('Location: ../views/alumno.php');
        exit();
    }
}

if (isset($_GET['op'])) {
    $op = $_GET['op'];
    if ($op == 'delete') {
        $id = $_GET['id'];
        $result = DeleteAlumno($id);
        header('Location: ../views/alumno.php');
        exit();
    }
}
