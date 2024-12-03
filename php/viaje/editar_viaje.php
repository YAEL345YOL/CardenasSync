<?php
include "../connection.php";
$con = connection();

$id = $_POST["id_editar_viaje"];
$id_barco = $_POST["id_barco_editar_viaje"];
$id_muelle = $_POST["id_muelle_editar_viaje"];
$estado = $_POST["estado_editar_viaje"];
$fecha_fin = $_POST["fecha_fin_editar_viaje"];
$hora_fin = $_POST["hora_fin_editar_viaje"];
$actualizaciones = $_POST["actualizaciones_editar_viaje"];

$sql = "UPDATE viaje SET
        fecha_fin_viaje = '$fecha_fin',
        hora_fin_viaje = '$hora_fin',
        estado_viaje = '$estado',
        actualizacion_viaje = '$actualizaciones',
        id_barco = '$id_barco',
        id_muelle = '$id_muelle'
        WHERE id_viaje = '$id'";

mysqli_query($con, $sql);

header("Location: ../../views/viaje.php");