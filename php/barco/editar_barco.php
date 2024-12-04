<?php
include "../connection.php";
$con = connection();

$id = verify_input($_POST["id_editar_barco"]);
$nombre = verify_input($_POST["nombre_editar_barco"]);
$tipo = verify_input($_POST["tipo_editar_barco"]);
$nacionalidad = verify_input($_POST["nacionalidad_editar_barco"]);

$sql = "UPDATE barco SET
        nombre_barco=?,
        tipo_barco=?,
        nacionalidad_barco=?
        WHERE id_barco = ?";

$consulta = $con->prepare($sql);
$consulta->bind_param("sssi",$nombre,$tipo,$nacionalidad,$id);
$consulta->execute();
$consulta->close();

header("Location: ../../views/barco.php");
?>