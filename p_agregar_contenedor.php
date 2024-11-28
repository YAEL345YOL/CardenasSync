<?php
include "p_coneccion.php";
$con = coneccion();

$id_viaje
$tipo
$tamano
$capacidad 

$sql = "INSERT INTO contenedor VALUES (NULL,'$id_viaje','$tipo','$tamano','$capacidad')";
mysqli_query($con,$sql);

?>