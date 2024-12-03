<?php
include "../connection.php";
$con = connection();

$fecha_inicio = $_POST["fecha_inicio_agregar_viaje"] ?? null;
$hora_inicio = $_POST["hora_inicio_agregar_viaje"] ?? null;
$origen = $_POST["origen_agregar_viaje"] ?? null;
$tiempo_estimado = $_POST["tiempo_estimado_agregar_viaje"] ?? null;
$id_barco = $_POST["id_barco_agregar_viaje"] ?? null;
$id_muelle = $_POST["id_muelle_agregar_viaje"] ?? null;

$sql = "INSERT INTO viaje (
        id_viaje,
        fecha_inicio_viaje,
        hora_inicio_viaje,
        origen_viaje,
        tiempo_estimado_viaje,
        id_barco,
        id_muelle
        ) VALUES (NULL,?,?,?,?,?,?);";

$consulta = $con->prepare($sql);
$consulta->bind_param("sssiii",$fecha_inicio,$hora_inicio,$origen,$tiempo_estimado,$id_barco,$id_muelle);
$consulta->execute();
$consulta->close();

header("Location: ../../views/viaje.php");