<?php
include "../connection.php";
$con = connection();

$id_viaje = $_POST["id_viaje_agregar_contenedor"] ;
$tipo = $_POST["tipo_agregar_contenedor"];
$tamano = $_POST["tamano_agregar_contenedor"];
$capacidad = $_POST["capacidad_agregar_contenedor"];

$sql = "INSERT INTO contenedor
        VALUES (
        NULL,
        '$tipo',
        '$tamano',
        '$capacidad',
        '$id_viaje'
        )";

mysqli_query($con,$sql);

header("Location: ../../views/contenedor.php");
?>