<?php
include "../php/connection.php";
$con = connection();

$sql1 = "SELECT * FROM cliente WHERE id_cliente = {$_GET["id"]}";

$cliente = $con->query($sql1);
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
    <title>Eliminar cliente</title>
</head>
<body class="body--form body--main">
    <form class="form form--size1" action="../php/cliente/eliminar_cliente.php" method="POST">
        <h2>Eliminar cliente</h2>

        <label for="id_eliminar_cliente">ID cliente</label>
        <select name="id_eliminar_cliente" id="id_eliminar_cliente" required>
            <?php
                while ($fila = $cliente->fetch_assoc()) {
                    echo "<option value='{$fila['id_cliente']}'>{$fila['id_cliente']}</option>";
                }
            ?>
        </select>

        <input value="Eliminar" type="submit">
    </form>
</body>
</html>