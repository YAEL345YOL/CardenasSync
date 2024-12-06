<?php
include "../connection.php";
$con = connection();

$id_cliente = verify_input($_POST["id_cliente_agregar_contenedor_cliente"]);
$id_contenedor = verify_input($_POST["id_contenedor_agregar_contenedor_cliente"]);

$sql = "INSERT INTO contenedor_cliente VALUES (NULL,?,?)";

$consulta = $con->prepare($sql);
$consulta->bind_param("ii",$id_cliente,$id_contenedor);
$consulta->execute();
$consulta->close();

header("Location: ../../views/contenedor_cliente.php");
?>