<?php
include "../connection.php";
$con = connection();

$id = verify_input($_POST["id_buscar_cliente"]);

if($id!=null){
    header("Location: ../../views/cliente.php?id=$id");
}
else{
    header("Location: ../../views/cliente.php");
}
?>