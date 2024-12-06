<?php
include "../php/connection.php";
$con = connection();

$sql1 = "SELECT * FROM barco WHERE id_barco = {$_GET["id"]}";

$barco = $con->query($sql1);
$barco_fila = $barco->fetch_assoc();
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
    <title>Eliminar barco</title>
</head>
<body class="body--form body--main">
    <form class="form form--size1" action="../php/barco/eliminar_barco.php" method="POST">
        <h2>Eliminar barco</h2>

        <label for="id_eliminar_barco">ID barco</label>
        <select name="id_eliminar_barco" id="id_eliminar_barco" required>
            <?php
                echo "<option value='{$barco_fila['id_barco']}'>{$barco_fila['id_barco']}</option>";
            ?>
        </select>

        <input value="Eliminar" type="submit">
    </form>
</body>
</html>