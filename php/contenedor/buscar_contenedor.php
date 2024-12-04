<?php
include "../connection.php";
$con = connection();

$id = verify_input($_POST["id_buscar_contenedor"]);

if($id!=null){
    header("Location: ../../views/contenedor.php?id=$id");
}
else{
    header("Location: ../../views/contenedor.php");
}

?>