<?php
include "coneccion.php";

$con = coneccion();

$id = null;
$nombre = $_POST["nombre_trabajador"];
$apellido = $_POST["apellido_trabajador"];
$puesto_trabajo = $_POST["puesto_trabajador"];
$fecha_nacimiento = $_POST["fecha_nacimiento_trabajador"];
$telefono = $_POST["telefono_trabajador"];
$correo_electronico = $_POST["correo_electronico_trabajador"];
$contrasena_trabajador = "changeme";

$sql = "INSERT INTO trabajador VALUES ('$id','$nombre','$apellido','$puesto_trabajo','$fecha_nacimiento','$telefono','$correo_electronico','$contrasena_trabajador')";
mysqli_query($con,$sql);

?>