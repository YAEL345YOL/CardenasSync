<?php
include "../connection.php";
$con = connection();

$id = verify_input($_POST["id_viaje_buscar_viaje_trabajador"]);

if($id!=null){
    header("Location: ../../views/viaje_trabajador.php?id=$id");
}
else{
    header("Location: ../../views/viaje_trabajador.php");
}
?>