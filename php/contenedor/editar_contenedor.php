<?php
include "../connection.php";

$con = connection();
$id = $_POST["id_editar_contenedor"];
$id_viaje = $_POST["id_viaje_editar_contenedor"];
$tipo = $_POST["tipo_editar_contenedor"];
$tamano = $_POST["tamano_editar_contenedor"];
$capacidad = $_POST["capacidad_editar_contenedor"];

$sql = "UPDATE contenedor SET tipo_contenedor='$tipo',tamano_contenedor='$tamano',capacidad_contenedor='$capacidad',id_viaje='$id_viaje' WHERE id_contenedor='$id'";

mysqli_query($con,$sql);

header("Location: ../../views/contenedor.php");
?>