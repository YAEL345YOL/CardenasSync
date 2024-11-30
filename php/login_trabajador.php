<?php
include "connection.php";

$con = connection();
$id = $_POST["id_login_trabajador"];
$contrasena = $_POST["contrasena_login_trabajador"];

$sql = "SELECT * FROM trabajador WHERE id_trabajador = '$id' AND contrasena_trabajador = '$contrasena'";

$resultado = mysqli_query($con,$sql);

if(mysqli_num_rows($resultado)>0){
    $fila = mysqli_fetch_assoc($resultado);
    header("Location: ../views/trabajador.php?id={$fila['id_trabajador']}");
}
// * Sin terminar
?>