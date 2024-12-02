<?php
include "../connection.php";

$con = connection();
$nombre = $_POST["nombre_agregar_barco"];
$tipo = $_POST["tipo_agregar_barco"];
$nacionalidad = $_POST["nacionalidad_agregar_barco"];

$sql = "INSERT INTO barco VALUES(NULL,'$nombre','$tipo','$nacionalidad')";

mysqli_query($con, $sql);
// * Terminado
?>