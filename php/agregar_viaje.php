<?php
include "connection.php";
$con = connection();

$id_viaje = NULL;
$fecha_inicio = $_POST["fecha_inicio_viaje"];
$fecha_fin = "";
$hora_inicio = $_POST["hora_inicio_viaje"];
$hora_fin = "";
$origen = $_POST["origen_viaje"];
$actualizacion = "";
$estado = "";
$tiempo_estimado = $_POST["tiempo_estimado_viaje"];
$id_barco = $_POST["id_barco_viaje"];
$id_muelle = $_POST["id_muelle_viaje"];


$sql = "INSERT INTO viaje VALUES ($id_viaje,'$fecha_inicio','$fecha_fin','$hora_inicio','$hora_fin','$origen','$actualizacion','$estado','$tiempo_estimado','$id_barco','$id_muelle')";
mysqli_query($con,$sql);
?>