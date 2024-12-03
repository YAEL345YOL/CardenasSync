<?php
include "../connection.php";
$con = connection();

$id = $_POST["id_editar_muelle"];
$nombre = $_POST["nombre_editar_muelle"];
$ubicacion = $_POST["ubicacion_editar_muelle"];

$sql = "UPDATE FROM muelle SET
        nombre_muelle = '$nombre',
        ubicacion_muelle = '$ubicacion',
        WHERE id_muelle = '$id'
        )";

mysqli_query($con,$sql);

header("Location: ../../views/muelle.php");
?>