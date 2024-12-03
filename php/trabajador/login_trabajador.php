<?php
include "../connection.php";
$con = connection();

$id = $_POST["id_login_trabajador"];
$contrasena = $_POST["contrasena_login_trabajador"];

$sql = "SELECT * FROM trabajador 
        WHERE id_trabajador = '$id' 
        AND contrasena_trabajador = '$contrasena'";

$resultado = mysqli_query($con,$sql);

if(mysqli_num_rows($resultado)>0){
    $fila = mysqli_fetch_assoc($resultado);
    session_start();
    $_SESSION["tipo"] = "trabajador";
    $_SESSION["id"] = $fila["id_trabajador"];
    header("Location: ../../views/inicio.php");
}
else{
    header("Location: ../../views/login_trabajador.php?error=1");
}
?>