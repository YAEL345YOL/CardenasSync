<?php
include "../connection.php";
$con = connection();

$correo = verify_input($_POST["correo_login_cliente"]);
$contrasena = verify_input($_POST["contrasena_login_cliente"]);

$sql = "SELECT * FROM cliente
        WHERE correo_cliente = ?
        AND contrasena_cliente = ?";

$consulta = $con->prepare($sql);
$consulta->bind_param("ss",$correo,$contrasena);
$consulta->execute();
$consulta->close();

if(mysqli_num_rows($resultado)>0){
    $fila = mysqli_fetch_assoc($resultado);
    session_start();
    $_SESSION["tipo"] = "cliente";
    $_SESSION["id"] = $fila["id_cliente"];
    header("Location: ../../views/index.php");
}
else{
    header("Location: ../../views/login_cliente.php?error=1");
}
?>