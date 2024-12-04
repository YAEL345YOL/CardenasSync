<?php
include "../connection.php";
$con = connection();

$id = verify_input($_POST["id_buscar_barco"]);

if($id!=null){
    header("Location: ../../views/barco.php?id=$id");
}
else{
    header("Location: ../../views/barco.php");
}

?>