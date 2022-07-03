<?php 
    include '../database/connection.php';

    //database scheme
    // CREATE TABLE `alumno` (
    //     `id_alumno` int(9) NOT NULL,
    //     `rut` int(11) NOT NULL,
    //     `nombre` varchar(30) NOT NULL,
    //     `apellido` varchar(30) NOT NULL,
    //     `carrera` int(9) NOT NULL
    //   ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

    // insertar alumno
    function insertarAlumno($rut, $nombre, $apellido, $carrera) {
        $con = connection();
        $sql = "INSERT INTO alumno (rut, nombre, apellido, carrera) VALUES ('$rut', '$nombre', '$apellido', '$carrera')";
        $result = mysqli_query($con, $sql);
        return $result;
    }

?>