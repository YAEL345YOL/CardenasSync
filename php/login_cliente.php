<?php
include "connection.php";
session_start();

$con = connection();
$correo = $_POST["correo_login_cliente"];
$contrasena = $_POST["contrasena_login_cliente"];

$sql = "SELECT * FROM cliente WHERE correo_cliente = '$correo' AND contrasena_cliente = '$contrasena'";

$resultado = mysqli_query($con,$sql);

?>