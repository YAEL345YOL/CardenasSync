<?php
include "../connection.php";
$con = connection();

$id = verify_input($_POST["id_eliminar_barco"]);

$sql = "DELETE FROM barco WHERE id_barco=?";

$consulta = $con->prepare($sql);
$consulta->bind_param("i",$id);
$consulta->execute();
$consulta->close();

header("Location: ../../views/barco.php");
?>