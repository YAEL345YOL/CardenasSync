<?php
include "../connection.php";
$con = connection();

$id = $_POST["id_editar_muelle"] ?? null;
$nombre = $_POST["nombre_editar_muelle"] ?? null;
$ubicacion = $_POST["ubicacion_editar_muelle"] ?? null;

$sql = "UPDATE FROM muelle SET
        nombre_muelle = ?,
        ubicacion_muelle = ?,
        WHERE id_muelle = ?
        )";

$consulta = $con->prepare($sql);
$consulta->bind_param("ssi",$nombre,$ubicacion,$id);
$consulta->execute();
$consulta->close();

header("Location: ../../views/muelle.php");
?>