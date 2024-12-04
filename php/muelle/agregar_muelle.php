<?php
include "../connection.php";
$con = connection();

$nombre = verify_input($_POST["nombre_agregar_muelle"]);
$ubicacion = verify_input($_POST["ubicacion_agregar_muelle"]);

$sql = "INSERT INTO muelle VALUES (NULL,?,?)";

$consulta = $con->prepare($sql);
$consulta->bind_param("ss",$nombre,$ubicacion);
$consulta->execute();
$consulta->close();

header("Location: ../../views/muelle.php");
?>