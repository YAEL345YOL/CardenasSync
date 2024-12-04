<?php
include "../connection.php";
$con = connection();

$id = verify_input($_POST["id_eliminar_muelle"]);

$sql = "DELETE FROM muelle WHERE id_muelle = ?";

$consulta = $con->prepare($sql);
$consulta->bind_param("i",$id);
$consulta->execute();
$consulta->close();

header("Location: ../../views/muelle.php");
?>