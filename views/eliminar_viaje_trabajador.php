<?php
include "../php/connection.php";
$con = connection();

$sql1 = "SELECT * FROM viaje WHERE id_viaje = {$_GET["id"]}";
$sql2 = "SELECT * FROM viaje_trabajador WHERE id_viaje = {$_GET["id"]}";

$viaje = $con->query($sql1);
$trabajador = $con->query($sql2);
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
    <title>Eliminar viaje trabajador</title>
</head>
<body class="body--form body--main">
    <form class="form form--size1" action="../php/viaje_trabajador/eliminar_viaje_trabajador.php" method="POST">
        <h2>Eliminar viaje trabajador</h2>

        <label for="id_viaje_eliminar_viaje_trabajador">ID viaje</label>
        <select name="id_viaje_eliminar_viaje_trabajador" id="id_viaje_eliminar_viaje_trabajador">
        <?php
            while($fila = $viaje->fetch_assoc()){
                echo "<option value='{$fila['id_viaje']}'>{$fila['id_viaje']}</option>";
            }
        ?>
        </select>

        <label for="id_trabajador_eliminar_viaje_trabajador">ID trabajador</label>
        <select name="id_trabajador_eliminar_viaje_trabajador" id="id_trabajador_eliminar_viaje_trabajador">
        <?php
            while($fila = $trabajador->fetch_assoc()){
                echo "<option value='{$fila['id_trabajador']}'>{$fila['id_trabajador']}</option>";
            }
        ?>
        </select>

        <input value="Eliminar" type="submit">
    </form>
</body>
</html>