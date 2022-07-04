<?php
    include '../database/connection.php';

    function insertarCarrera($nombre) {
        $con = connection();
        $sql = "INSERT INTO carrera (nombre_carrera) VALUES ('$nombre')";
        $result = mysqli_query($con, $sql);
        return $result;
    }
    function getCarreras() {
        $con = connection();
        $sql = "SELECT * FROM carrera";
        $result = mysqli_query($con, $sql);
        return $result;
    }
    function deleteCarrera($id) {
        $con = connection();
        $sql = "DELETE FROM carrera WHERE id_carrera = $id";
        $result = mysqli_query($con, $sql);
        return $result;
    }
    function updateCarrera($id, $nombre) {
        $con = connection();
        $sql = "UPDATE carrera SET nombre_carrera = '$nombre' WHERE id_carrera = $id";
        $result = mysqli_query($con, $sql);
        return $result;
    }
?>