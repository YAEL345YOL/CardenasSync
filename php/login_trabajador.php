<?php
include "connection.php";
session_start();

$con = connection();

$id = $_POST["id_trabajador_login"];
$contrasena = $_POST["contrasena_trabajador_login"];

$sql = "SELECT * FROM trabajador WHERE id_trabajador = '$id' AND contrasena_trabajador_login = '$contrasena'";

$resultado = mysqli_query($con,$sql);

?>