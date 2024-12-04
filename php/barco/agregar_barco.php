<?php
include "../connection.php";
$con = connection();

$nombre = verify_input($_POST["nombre_agregar_barco"]);
$tipo = verify_input($_POST["tipo_agregar_barco"]);
$nacionalidad = verify_input($_POST["nacionalidad_agregar_barco"]);

$sql = "INSERT INTO barco VALUES (NULL,?,?,?)";

$consulta = $con->prepare($sql);
$consulta->bind_param("sss",$nombre,$tipo,$nacionalidad);
$consulta->execute();
$consulta->close();

header("Location: ../../views/barco.php");
?>