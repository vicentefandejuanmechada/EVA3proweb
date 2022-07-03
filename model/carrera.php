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
?>