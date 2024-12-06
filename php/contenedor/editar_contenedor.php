<?php
include "../connection.php";
$con = connection();

$id = verify_input($_POST["id_editar_contenedor"]);
$id_viaje = verify_input($_POST["id_viaje_editar_contenedor"]);
$tipo = verify_input($_POST["tipo_editar_contenedor"]);
$tamano = verify_input($_POST["tamano_editar_contenedor"]);
$capacidad = verify_input($_POST["capacidad_editar_contenedor"]);

$sql = "UPDATE contenedor SET
        tipo_contenedor=?,
        tamano_contenedor=?,
        capacidad_contenedor=?,
        id_viaje=?
        WHERE id_contenedor=?";

$consulta = $con->prepare($sql);
$consulta->bind_param("ssiii",$tipo,$tamano,$capacidad,$id_viaje,$id);
$consulta->execute();
$consulta->close();

header("Location: ../../views/contenedor.php");
?>