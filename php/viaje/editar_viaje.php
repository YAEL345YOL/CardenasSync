<?php
include "../connection.php";
$con = connection();

$id = $_POST["id_editar_viaje"] ?? null;
$id_barco = $_POST["id_barco_editar_viaje"] ?? null;
$id_muelle = $_POST["id_muelle_editar_viaje"] ?? null;
$estado = $_POST["estado_editar_viaje"] ?? null;
$fecha_fin = $_POST["fecha_fin_editar_viaje"] ?? null;
$hora_fin = $_POST["hora_fin_editar_viaje"] ?? null;
$actualizacion = $_POST["actualizaciones_editar_viaje"] ?? null;

$sql = "UPDATE viaje SET
        fecha_fin_viaje = ?,
        hora_fin_viaje = ?,
        estado_viaje = ?,
        actualizacion_viaje = ?,
        id_barco = ?,
        id_muelle = ?
        WHERE id_viaje = ?";

$consulta = $con->prepare($sql);
$consulta->bind_param("ssssiii",$fecha_fin,$hora_fin,$estado,$actualizacion,$id_barco,$id_muelle,$id);
$consulta->execute();
$consulta->close();

header("Location: ../../views/viaje.php");