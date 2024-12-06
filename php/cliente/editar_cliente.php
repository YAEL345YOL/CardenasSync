<?php
include "../connection.php";
$con = connection();

$id = verify_input($_POST["id_editar_cliente"]);
$nombre = verify_input($_POST["nombre_editar_cliente"]);
$apellido = verify_input($_POST["apellido_editar_cliente"]);
$fecha_nacimiento = verify_input($_POST["fecha_nacimiento_editar_cliente"]);
$correo = verify_input($_POST["correo_editar_cliente"]);
$contrasena = verify_input($_POST["contrasena_editar_cliente"]);

$sql = "UPDATE cliente SET
        nombre_cliente = ?,
        apellido_cliente = ?,
        fecha_nacimiento_cliente = ?,
        correo_cliente = ?,
        contrasena_cliente = ?
        WHERE id_cliente = ?;
        ";

$consulta = $con->prepare($sql);
$consulta->bind_param("sssssi",$nombre,$apellido,$fecha_nacimiento,$correo,$contrasena,$id);
$consulta->execute();
$consulta->close();

header("Location: ../../views/index.php");
?>