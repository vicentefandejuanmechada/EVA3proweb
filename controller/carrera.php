<?php
include '../model/carrera.php';
//recibe los datos del formulario
if (isset($_POST['op'])) {
    echo "anohere";
    $op = $_POST['op'];
    //inserta los datos en la base de datos
    if ($op == 'insert') {
        $nombre = $_POST['nombre'];
        $result = insertarCarrera($nombre);
        die($result);
    } else if ($op == 'update') {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $result = updateCarrera($id, $nombre);
        die($result);
    }
}

if (isset($_GET['op'])) {
    $op = $_GET['op'];
    if ($op == 'delete') {
        $id = $_GET['id'];
        $result = deleteCarrera($id);
        echo "success";
        die($result);
    }
}
