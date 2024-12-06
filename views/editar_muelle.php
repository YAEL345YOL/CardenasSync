<?php
include "../php/connection.php";
$con = connection();

$sql1 = "SELECT * FROM muelle".(isset($_GET["id"]) ? " WHERE id_muelle = {$_GET["id"]}":"");

$muelle = $con->query($sql1);
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
    <title>Agregar muelle</title>
</head>
<body class="body--form body--main">
    <form class="form form--size1" action="../php/muelle/editar_muelle.php" method="POST">
        <h2>Editar muelle</h2>

        <label for="id_editar_muelle">ID muelle</label>        
        <select name="id_editar_muelle" id="id_editar_muelle" required>
            <?php
                while($fila = $muelle->fetch_assoc()){
                    echo "<option value='{$fila['id_muelle']}'>{$fila['id_muelle']}</option>";
                }
            ?>
        </select>

        <label for="nombre_editar_muelle">Nombre</label>
        <input id="nombre_editar_muelle" name="nombre_editar_muelle" type="text" placeholder="Nombre del muelle" required>

        <label for="ubicacion_editar_muelle">Ubicación</label>
        <input id="ubicacion_editar_muelle" name="ubicacion_editar_muelle" type="text" placeholder="Ubicación del muelle" required>

        <input value="Editar" type="submit">
    </form>
</body>
</html>