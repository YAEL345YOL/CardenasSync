<?php
include "../connection.php";
$con = connection();

$nombre = verify_input($_POST["nombre_agregar_cliente"]);
$apellido = verify_input($_POST["apellido_agregar_cliente"]);
$fecha_nacimiento = verify_input($_POST["fecha_nacimiento_agregar_cliente"]);
$correo = verify_input($_POST["correo_agregar_cliente"]);
$contrasena = verify_input($_POST["contrasena_agregar_cliente"]);

$sql = "INSERT INTO cliente VALUES (NULL,?,?,?,?,?)";

$consulta = $con->prepare($sql);
$consulta->bind_param("sssss",$nombre,$apellido,$fecha_nacimiento,$correo,$contrasena);
$consulta->execute();
$consulta->close();

header("Location: ../../views/index.php");
?>