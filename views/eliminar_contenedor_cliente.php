<?php
include "../php/connection.php";
$con = connection();

$sql1 = "SELECT * FROM cliente WHERE id_cliente = {$_GET["id"]}";
$sql2 = "SELECT * FROM contenedor_cliente WHERE id_cliente = {$_GET["id"]}";

$cliente = $con->query($sql1);
$contenedor = $con->query($sql2);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a7358fff6e.js" crossorigin="anonymous"></script>
    <title>Eliminar contenedor_cliente</title>
</head>
<body class="body--form body--main">
    <form class="form form--size1" action="../php/contenedor_cliente/eliminar_contenedor_cliente.php" method="POST">
        <h2>Eliminar contenedor_cliente</h2>

        <label for="id_cliente_eliminar_contenedor_cliente">ID cliente</label>
        <select name="id_cliente_eliminar_contenedor_cliente" id="id_cliente_eliminar_contenedor_cliente" required>
            <?php
                while($fila = $cliente->fetch_assoc()){
                    echo "<option value='{$fila['id_cliente']}'>{$fila['id_cliente']}</option>";
                }
            ?>
        </select>

        <label for="id_contenedor_eliminar_contenedor_cliente">ID contenedor</label>
        <select name="id_contenedor_eliminar_contenedor_cliente" id="id_contenedor_eliminar_contenedor_cliente" required>
            <?php
                while($fila = $contenedor->fetch_assoc()){
                    echo "<option value='{$fila['id_contenedor']}'>{$fila['id_contenedor']}</option>";
                }
            ?>
        </select>

        <input type="submit">
    </form>
</body>
</html>