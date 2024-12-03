<?php
include "../connection.php";
$con = connection();

$id = $_POST["id_editar_barco"];
$nombre = $_POST["nombre_editar_barco"];
$tipo = $_POST["tipo_editar_barco"];
$nacionalidad = $_POST["nacionalidad_editar_barco"];

$sql = "UPDATE barco SET
        nombre_barco='$nombre',
        tipo_barco='$tipo',
        nacionalidad_barco='$nacionalidad'
        WHERE id_barco = '$id'";

mysqli_query($con, $sql);

header("Location: ../../views/barco.php");
?>