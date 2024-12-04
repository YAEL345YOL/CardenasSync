<?php
include "../connection.php";
$con = connection();

$id = verify_input($_POST["id_editar_muelle"]);
$nombre = verify_input($_POST["nombre_editar_muelle"]);
$ubicacion = verify_input($_POST["ubicacion_editar_muelle"]);

$sql = "UPDATE muelle SET
        nombre_muelle = ?,
        ubicacion_muelle = ?
        WHERE id_muelle = ?";

$consulta = $con->prepare($sql);
$consulta->bind_param("ssi",$nombre,$ubicacion,$id);
$consulta->execute();
$consulta->close();

header("Location: ../../views/muelle.php");
?>