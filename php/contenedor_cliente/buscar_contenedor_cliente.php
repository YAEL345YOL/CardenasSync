<?php
include "../connection.php";
$con = connection();

$id_cliente = verify_input($_POST["id_cliente_buscar_contenedor_cliente"]);

if($id_cliente!=null){
    header("Location: ../../views/contenedor_cliente.php?id=$id_cliente");
}
else{
    header("Location: ../../views/contenedor_cliente.php");
}
?>