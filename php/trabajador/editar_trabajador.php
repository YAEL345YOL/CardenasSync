<?php
include "../connection.php";
$con = connection();

$id = $_POST["id_editar_trabajador"];
$nombre = $_POST["nombre_editar_trabajador"];
$apellido = $_POST["apellido_editar_trabajador"];
$puesto = $_POST["puesto_editar_trabajador"];
$fecha_nacimiento = $_POST["fecha_nacimiento_editar_trabajador"];
$telefono = $_POST["telefono_editar_trabajador"];
$correo = $_POST["correo_editar_trabajador"];
$contrasena = $_POST["contrasena_editar_trabajador"];

$sql = "UPDATE trabajador SET 
        nombre_trabajador='$nombre',
        apellido_trabajador='$apellido',
        puesto_trabajador='$puesto',
        fecha_de_nacimiento_trabajador='$fecha_nacimiento',
        telefono_trabajador='$telefono',
        correo_trabajador='$correo',
        contrasena_trabajador='$contrasena'
        WHERE id_trabajador = '$id'";

mysqli_query($con,$sql);

header("Location: ../../views/trabajador.php");
?>