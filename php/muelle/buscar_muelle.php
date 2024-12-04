<?php
include "../connection.php";
$con = connection();

$id = verify_input($_POST["id_buscar_muelle"]);

if($id!=null){
    header("Location: ../../views/muelle.php?id=$id");
}
else{
    header("Location: ../../views/muelle.php");
}

?>