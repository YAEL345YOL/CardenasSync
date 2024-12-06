<?php
include "../connection.php";
$con = connection();

$id = verify_input($_POST["id_eliminar_cliente"]);

$sql1 = "DELETE FROM cliente WHERE id_cliente=?";

$consulta = $con->prepare($sql1);
$consulta->bind_param("i",$id);
$consulta->execute();
$consulta->close();

header("Location: ../../views/cliente.php");
?>