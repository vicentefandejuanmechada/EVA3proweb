<?php 
    include_once '../database/connection.php';

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
    function getAlumnos() {
        $con = connection();
        $sql = "SELECT id_alumno, rut, nombre, apellido, ca.nombre_carrera carrera FROM alumno inner join carrera ca on alumno.carrera = ca.id_carrera";
        $result = mysqli_query($con, $sql);
        return $result;
    }
    function updateAlumno($id, $rut, $nombre, $apellido, $carrera) {
        $con = connection();
        $sql = "UPDATE alumno SET rut = '$rut', nombre = '$nombre', apellido = '$apellido', carrera = '$carrera' WHERE id_alumno = '$id'";
        $result = mysqli_query($con, $sql);
        return $result;
    }

    function DeleteAlumno(){
        $sql = "DELETE FROM alumno where id_alumno = '$id' ";
        $result = mysql_query($con,$sql);
        return $result;
    }

?>
