<?php
include "connection.php";

$con = connection();
$nombre = $_POST["nombre_agregar_cliente"];
$apellido = $_POST["apellido_agregar_cliente"];
$fecha_nacimiento = $_POST["fecha_nacimiento_agregar_cliente"];
$correo = $_POST["correo_agregar_cliente"];
$contrasena = "changeme";

$sql = "INSERT INTO cliente VALUES (NULL,'$nombre','$apellido','$fecha_nacimiento','$correo','$contrasena')";

mysqli_query($con,$sql);
// * Terminado
?>