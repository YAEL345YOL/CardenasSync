<?php
include "../connection.php";
$con = connection();

$id = verify_input($_POST["id_eliminar_trabajador"]);

$sql1 = "DELETE FROM trabajador WHERE id_trabajador = ?";

$consulta = $con->prepare($sql1);
$consulta->bind_param("i",$id);
$consulta->execute();
$consulta->close();

header("Location: ../../views/trabajador.php");
?>