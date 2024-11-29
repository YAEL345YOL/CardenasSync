<?php
include "connection.php";
session_start();

$con = connection();

$correo = $_POST["correo_cliente_login"];
$contrasena = $_POST["contrasena_cliente_login"];

$sql = "SELECT * FROM cliente WHERE correo_cliente = '$correo' AND contrasena_cliente = '$contrasena'";

$resultado = mysqli_query($con,$sql);

?>