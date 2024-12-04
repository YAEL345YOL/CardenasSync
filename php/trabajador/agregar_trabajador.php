<?php
include "../connection.php";
$con = connection();

$nombre = verify_input($_POST["nombre_agregar_trabajador"]);
$apellido = verify_input($_POST["apellido_agregar_trabajador"]);
$puesto_trabajo = verify_input($_POST["puesto_agregar_trabajador"]);
$fecha_nacimiento = verify_input($_POST["fecha_nacimiento_agregar_trabajador"]);
$telefono = verify_input($_POST["telefono_agregar_trabajador"]);
$correo = verify_input($_POST["correo_agregar_trabajador"]);
$contrasena = "changeme";

$sql = "INSERT INTO trabajador VALUES (NULL,?,?,?,?,?,?,?);";

$consulta = $con->prepare($sql);
$consulta->bind_param("sssssss", $nombre, $apellido, $puesto_trabajo, $fecha_nacimiento, $telefono, $correo, $contrasena);
$consulta->execute();
$consulta->close();

header("Location: ../../views/trabajador.php");
?>