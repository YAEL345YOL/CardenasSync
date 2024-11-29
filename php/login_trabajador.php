<?php
include "connection.php";
session_start();

$con = connection();
$id = $_POST["id_login_trabajador"];
$contrasena = $_POST["id_login_trabajador"];

$sql = "SELECT * FROM cliente WHERE id_trabajador = '$id' AND contrasena_trabajador = '$contrasena'";

$resultado = mysqli_query($con,$sql);

if($resultado->num_rows>0){
    header("Location: ../views/trabajador.php");
}
else{
    header("Location: login_trabajador.php");
}
// * Sin terminar
?>