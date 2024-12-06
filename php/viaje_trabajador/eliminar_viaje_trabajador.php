<?php
include "../connection.php";
$con = connection();

$id_viaje = verify_input($_POST["id_viaje_eliminar_viaje_trabajador"]);
$id_trabajador = verify_input($_POST["id_trabajador_eliminar_viaje_trabajador"]);

$sql1 = "DELETE FROM viaje_trabajador
        WHERE id_viaje = ?
        AND id_trabajador = ?";

$consulta = $con->prepare($sql1);
$consulta->bind_param("ii",$id_viaje,$id_trabajador);
$consulta->execute();
$consulta->close();

header("Location: ../../views/viaje_trabajador.php");
?>