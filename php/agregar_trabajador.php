<?php
include "connection.php";

$con = connection();
$nombre = $_POST["nombre_trabajador"];
$apellido = $_POST["apellido_trabajador"];
$puesto_trabajo = $_POST["puesto_trabajo_trabajador"];
$fecha_nacimiento = $_POST["fecha_nacimiento_trabajador"];
$telefono = $_POST["telefono_trabajador"];
$correo = $_POST["correo_electronico_trabajador"];
$contrasena= "changeme";

$sql = "INSERT INTO trabajador VALUES (NULL,'$nombre','$apellido','$puesto_trabajo','$fecha_nacimiento','$telefono','$correo','$contrasena');";
mysqli_query($con,$sql);
?>