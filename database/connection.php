<?php
function connection() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "eva3pedrog_vicentes";
    $con = mysqli_connect($host, $user, $pass, $db);
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $con;
}
?>
