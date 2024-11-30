<?php
include "connection.php";

$con = connection();
$correo = $_POST["correo_login_cliente"];
$contrasena = $_POST["contrasena_login_cliente"];

$sql = "SELECT * FROM cliente WHERE correo_cliente = '$correo' AND contrasena_cliente = '$contrasena'";

$resultado = mysqli_query($con,$sql);

if(mysqli_num_rows($resultado)>0){
    $fila = mysqli_fetch_assoc($resultado);
    session_start();
    $_SESSION["tipo"] = "cliente";
    $_SESSION["id"] = $fila["id_cliente"];
    header("Location: ../views/inicio.php");
}
else{
    header("Location: ../views/login_cliente.php?error=1");
}
// * Terminado
?>