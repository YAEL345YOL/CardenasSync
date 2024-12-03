<?php
include "../connection.php";
$con = connection();

$id = $_POST["id_editar_trabajador"] ?? null;
$nombre = $_POST["nombre_editar_trabajador"] ?? null;
$apellido = $_POST["apellido_editar_trabajador"] ?? null;
$puesto = $_POST["puesto_editar_trabajador"] ?? null;
$fecha_nacimiento = $_POST["fecha_nacimiento_editar_trabajador"] ?? null;
$telefono = $_POST["telefono_editar_trabajador"] ?? null;
$correo = $_POST["correo_editar_trabajador"] ?? null;
$contrasena = $_POST["contrasena_editar_trabajador"] ?? null;

$sql = "UPDATE trabajador SET 
        nombre_trabajador=?,
        apellido_trabajador=?,
        puesto_trabajador=?,
        fecha_nacimiento_trabajador=?,
        telefono_trabajador=?,
        correo_trabajador=?,
        contrasena_trabajador=?
        WHERE id_trabajador = ?";

$consulta = $con->prepare($sql);
$consulta->bind_param("ssssssss", $nombre, $apellido, $puesto_trabajo, $fecha_nacimiento, $telefono, $correo, $contrasena,$id);
$consulta->execute();
$consulta->close();

header("Location: ../../views/trabajador.php");
?>