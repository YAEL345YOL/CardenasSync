<?php
include "../connection.php";
$con = connection();

$id = verify_input($_POST["id_editar_trabajador"]);
$nombre = verify_input($_POST["nombre_editar_trabajador"]);
$apellido = verify_input($_POST["apellido_editar_trabajador"]);
$puesto = verify_input($_POST["puesto_editar_trabajador"]);
$fecha_nacimiento = verify_input($_POST["fecha_nacimiento_editar_trabajador"]);
$telefono = verify_input($_POST["telefono_editar_trabajador"]);
$correo = verify_input($_POST["correo_editar_trabajador"]);
$contrasena = verify_input($_POST["contrasena_editar_trabajador"]);

$sql = "UPDATE trabajador SET 
        nombre_trabajador = ?,
        apellido_trabajador = ?,
        puesto_trabajador = ?,
        fecha_nacimiento_trabajador = ?,
        telefono_trabajador = ?,
        correo_trabajador = ?,
        contrasena_trabajador = ?
        WHERE id_trabajador = ?";

$consulta = $con->prepare($sql);
$consulta->bind_param("ssssssss",$nombre,$apellido,$puesto,$fecha_nacimiento,$telefono,$correo,$contrasena,$id);
$consulta->execute();
$consulta->close();

header("Location: ../../views/trabajador.php");
?>