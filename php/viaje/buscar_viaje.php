<?php
include "../connection.php";
$con = connection();

$id = verify_input($_POST["id_buscar_viaje"]);

if($id!=null){
    header("Location: ../../views/viaje.php?id=$id");
}
else{
    header("Location: ../../views/viaje.php");
}
?>