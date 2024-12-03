<?php
include "../connection.php";
$con = connection();

$nombre = $_POST["nombre_agregar_muelle"] ?? null;
$ubicacion = $_POST["ubicacion_agregar_muelle"] ?? null;

$sql = "INSERT INTO muelle VALUES (NULL,?,?)";

$consulta = $con->prepare($sql);
$consulta->bind_param("ss",$nombre,$ubicacion);
$consulta->execute();
$consulta->close();

header("Location: ../../views/muelle.php");
?>