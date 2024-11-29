<?php
include "connection.php";

$con = connection();
$correo = $_POST["correo_login_cliente"];
$contrasena = $_POST["contrasena_login_cliente"];

$sql = "SELECT * FROM cliente WHERE correo_cliente = '$correo' AND contrasena_cliente = '$contrasena'";

$resultado = mysqli_query($con,$sql);

if($resultado->num_rows>0){
    header("Location: ../views/cliente.php");
}
else{
    header("Location: login_cliente.php");
}
?>