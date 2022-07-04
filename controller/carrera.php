<?php
include '../model/carrera.php';
//recibe los datos del formulario
if (isset($_POST['op'])) {
    $op = $_POST['op'];
    //inserta los datos en la base de datos
    if ($op == 'insert') {
        $nombre = $_POST['nombre'];
        $result = insertarCarrera($nombre);
        header('Location: ../views/carrera.php');
        exit();
    } else if ($op == 'update') {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $result = updateCarrera($id, $nombre);
        header('Location: ../views/carrera.php');
        exit();
    }
}

if (isset($_GET['op'])) {
    $op = $_GET['op'];
    if ($op == 'delete') {
        $id = $_GET['id'];
        $result = deleteCarrera($id);
        header('Location: ../views/carrera.php');
        exit();
    }
}
