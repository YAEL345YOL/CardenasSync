<?php
include "../connection.php";
$con = connection();

$id = verify_input($_POST["id_eliminar_contenedor"]);

$sql = "DELETE FROM contenedor WHERE id_contenedor=?";

$consulta = $con->prepare($sql);
$consulta->bind_param("i",$id);
$consulta->execute();
$consulta->close();

header("Location: ../../views/contenedor.php");
?>