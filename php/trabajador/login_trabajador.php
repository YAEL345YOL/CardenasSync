<?php
include "../connection.php";
$con = connection();

$id = verify_input($_POST["id_login_trabajador"]);
$contrasena = verify_input($_POST["contrasena_login_trabajador"]);

$sql = "SELECT * FROM trabajador 
        WHERE id_trabajador = ? 
        AND contrasena_trabajador = ?";

$consulta = $con->prepare($sql);
$consulta->bind_param("is",$id,$contrasena);
$consulta->execute();
$resultado = $consulta->get_result();

if($resultado->num_rows>0){
    $fila = $resultado->fetch_assoc();
    session_start();
    $_SESSION["tipo"] = "trabajador";
    $_SESSION["id"] = $fila["id_trabajador"];
    header("Location: ../../views/index.php");
}
else{
    header("Location: ../../views/login_trabajador.php?error=1");
}
?>