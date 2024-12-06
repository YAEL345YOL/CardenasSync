<?php
include "../connection.php";
$con = connection();

$id = verify_input($_POST["id_eliminar_viaje"]);

$sql = "DELETE FROM viaje WHERE id_viaje = ?";

$consulta = $con->prepare($sql);
$consulta->bind_param("i",$id);
$consulta->execute();
$consulta->close();

header("Location: ../../views/viaje.php");
?>