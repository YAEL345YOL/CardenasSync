<?php
include "../connection.php";
$con = connection();

$id_cliente = verify_input($_POST["id_cliente_eliminar_contenedor_cliente"]);
$id_contenedor = verify_input($_POST["id_contenedor_eliminar_contenedor_cliente"]);

$sql = "UPDATE contenedor_cliente SET
        contenedor_cliente.id_contenedor = null,
        WHERE contenedor_cliente.id_cliente = ?
        AND contenedor_cliente.id_contenedor = ?";

$consulta = $con->prepare($sql);
$consulta->bind_param("ii",$id_cliente,$id_contenedor);
$consulta->execute();
$consulta->close();

?>