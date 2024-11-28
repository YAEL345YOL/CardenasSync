<?php
include "p_coneccion.php";

$con = coneccion();
$id_viaje = $_POST["id_viaje_contenedor"] ;
$tipo = $_POST["tipo_contenedor"];
$tamano = $_POST["tamano_contenedor"];
$capacidad = $_POST["capacidad_contenedor"];

$sql = "INSERT INTO contenedor VALUES (NULL,'$tipo','$tamano','$capacidad','$id_viaje')";
mysqli_query($con,$sql);
?>