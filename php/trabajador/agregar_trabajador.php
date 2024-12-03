<?php
include "../connection.php";
$con = connection();

$nombre = $_POST["nombre_agregar_trabajador"] ?? null;
$apellido = $_POST["apellido_agregar_trabajador"] ?? null;
$puesto_trabajo = $_POST["puesto_agregar_trabajador"] ?? null;
$fecha_nacimiento = $_POST["fecha_nacimiento_agregar_trabajador"] ?? null;
$telefono = $_POST["telefono_agregar_trabajador"] ?? null;
$correo = $_POST["correo_agregar_trabajador"] ?? null;
$contrasena = "changeme";

$sql = "INSERT INTO trabajador VALUES (NULL,?,?,?,?,?,?,?);";

$consulta = $con->prepare($sql);
$consulta->bind_param("sssssss", $nombre, $apellido, $puesto_trabajo, $fecha_nacimiento, $telefono, $correo, $contrasena);
$consulta->execute();
$consulta->close();

header("Location: ../../views/trabajador.php");
?>