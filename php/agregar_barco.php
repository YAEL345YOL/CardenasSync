<?php
include "connection.php";

$con = connection();
$nombre = $_POST["nombre_barco"];
$tipo = $_POST["tipo_barco"];
$nacionalidad = $_POST["nacionalidad_barco"];

$sql = "INSERT INTO barco VALUES(NULL,'$nombre','$tipo','$nacionalidad')";
mysqli_query($con, $sql);
?>