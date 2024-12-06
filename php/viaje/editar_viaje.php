<?php
include "../connection.php";
$con = connection();

$id = verify_input($_POST["id_editar_viaje"]);
$id_barco = verify_input($_POST["id_barco_editar_viaje"]);
$id_muelle = verify_input($_POST["id_muelle_editar_viaje"]);
$estado = verify_input($_POST["estado_editar_viaje"]);
$fecha_fin = verify_input($_POST["fecha_fin_editar_viaje"]);
$hora_fin = verify_input($_POST["hora_fin_editar_viaje"]);
$tiempo_estimado = verify_input($_POST["tiempo_estimado_editar_viaje"]);

$sql = "UPDATE viaje SET
        fecha_fin_viaje = ?,
        hora_fin_viaje = ?,
        estado_viaje = ?,
        tiempo_estimado_viaje = ?,
        id_barco = ?,
        id_muelle = ?
        WHERE id_viaje = ?";

$consulta = $con->prepare($sql);
$consulta->bind_param("ssssiii",$fecha_fin,$hora_fin,$estado,$tiempo_estimado,$id_barco,$id_muelle,$id);
$consulta->execute();
$consulta->close();

header("Location: ../../views/viaje.php");
?>