<?php
include "../connection.php";
$con = connection();

$id = verify_input($_POST["id_buscar_trabajador"]);

if($id!=null){
    header("Location: ../../views/trabajador.php?id=$id");
}
else{
    header("Location: ../../views/trabajador.php");
}
?>