<?php
include "../php/connection.php";
$con = connection();

$sql1 = "SELECT * FROM barco".(isset($_GET["id"]) ? " WHERE id_barco = {$_GET["id"]}":"");

$barco = $con->query($sql1);
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
    <title>Editar barco</title>
</head>
<body class="body--form body--main">
    <form class="form form--size1" action="../php/barco/editar_barco.php" method="POST">
        <h2>Editar barco</h2>

        <label for="id_editar_barco">ID barco</label>
        <select name="id_editar_barco" id="id_editar_barco" required>
            <?php
                while ($fila = $barco->fetch_assoc()) {
                    echo "<option value='{$fila['id_barco']}'>{$fila['id_barco']}</option>";
                }
            ?>
        </select>

        <label for="nombre_editar_barco">Nombre del barco</label>
        <input id="nombre_editar_barco" name="nombre_editar_barco" type="text" placeholder="Nombre del barco" required>

        <label for="tipo_editar_barco">Tipo de barco</label>
        <select id="tipo_editar_barco" name="tipo_editar_barco" required>
            <option value="Portacontenedores">Portacontenedores</option>
            <option value="Granelero">Granelero</option>
            <option value="Petrolero">Petrolero</option>
            <option value="Gasero">Gasero</option>
            <option value="Quimiquero">Quimiquero</option>
        </select>

        <label for="nacionalidad_editar_barco">Nacionalidad</label>
        <input id="nacionalidad_editar_barco" name="nacionalidad_editar_barco" list="nacionalidad_editar" placeholder="Nacionalidad" required>
        <datalist id="nacionalidad_editar">
            <option value="México">
            <option value="Estados Unidos">
            <option value="China">
            <option value="Japón">
            <option value="Corea del Sur">
            <option value="Panamá">
            <option value="Singapur">
            <option value="Hong Kong">
            <option value="Bahamas">
            <option value="Islas Marshall">
            <option value="Liberia">
            <option value="Malta">
            <option value="República Dominicana">
            <option value="Italia">
        </datalist>

        <input type="submit">
    </form>
</body>
</html>