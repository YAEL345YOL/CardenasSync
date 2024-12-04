<?php
include "../connection.php";
$con = connection();

$tipo = verify_input($_POST["tipo_agregar_contenedor"]);
$tamano = verify_input($_POST["tamano_agregar_contenedor"]);
$capacidad = verify_input($_POST["capacidad_agregar_contenedor"]);
$id_viaje = verify_input($_POST["id_viaje_agregar_contenedor"]);

$sql = "INSERT INTO contenedor VALUES (NULL,?,?,?,?)";

$consulta = $con->prepare($sql);
$consulta->bind_param("sssi",$tipo,$tamano,$capacidad,$id_viaje);
$consulta->execute();
$consulta->close();

header("Location: ../../views/contenedor.php");
?>