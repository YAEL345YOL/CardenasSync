<?php
include "../connection.php";

$con = connection();
$nombre = $_POST["nombre_agregar_muelle"];
$ubicacion = $_POST["ubicacion_agregar_muelle"];

$sql = "INSERT INTO muelle VALUES (NULL,'$nombre','$ubicacion')";

mysqli_query($con,$sql);
?>