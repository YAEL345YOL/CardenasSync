<?php
include "../connection.php";

$con = connection();
$id = $_POST["id_eliminar_contenedor"];

$sql = "DELETE FROM contenedor WHERE id_contenedor='$id'";

mysqli_query($con,$sql);

header("Location: ../../views/contenedor.php");
?>