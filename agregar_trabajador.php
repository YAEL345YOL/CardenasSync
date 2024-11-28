<?php
include "coneccion.php";

$con = coneccion();

$id = null;
$nombre = $_POST["nombre_trabajdor"];
$apellido = $_POST["apellido_trabajador"];
$puesto_trabajo = $_POST["puesto_trabajador"];
$fecha_nacimiento = $_POST["fecha_nacimiento_trabajador"];
$telefono = $_POST["telefono_trabajador"];
$correo_electronico = $_POST["correo_eletronico_trabajador"];

$sql = "INSERT INTO trabajador VALUES('$id','$nombre','$apellido','$puesto_trabajo','$fecha_nacimiento','$telefono','$correo_electronico')";
mysqli_query($con,$sql);

?>