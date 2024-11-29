<?php
include "connection.php";

$con = connection();
$nombre = $_POST["nombre_agregar_trabajador"];
$apellido = $_POST["apellido_agregar_trabajador"];
$puesto_trabajo = $_POST["puesto_agregar_trabajador"];
$fecha_nacimiento = $_POST["fecha_nacimiento_agregar_trabajador"];
$telefono = $_POST["telefono_agregar_trabajador"];
$correo = $_POST["correo_agregar_trabajador"];
$contrasena= "changeme";

$sql = "INSERT INTO trabajador VALUES (NULL,'$nombre','$apellido','$puesto_trabajo','$fecha_nacimiento','$telefono','$correo','$contrasena');";

mysqli_query($con,$sql);
?>