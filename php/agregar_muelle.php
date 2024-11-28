<?php
include "connection.php";

$con = connection();
$nombre = $_POST["nombre_muelle"];
$ubicacion = $_POST["ubicacion_muelle"];

$sql = "INSERT INTO muelle VALUES (NULL,'$nombre','$ubicacion')";
mysqli_query($con,$sql);
?>