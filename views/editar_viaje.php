<?php 
include "../php/connection.php";
$con = connection();

$sql1 = "SELECT * FROM viaje".(isset($_GET["id"]) ? " WHERE id_viaje = {$_GET["id"]}":"");
$sql2 = "SELECT * FROM barco";
$sql3 = "SELECT * FROM muelle";

$viaje = $con->query($sql1);
$barco = $con->query($sql2);
$muelle = $con->query($sql3);
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
    <title>Editar viaje</title>
</head>
<body class="body--form body--main">
    <form class="form form--size3" action="../php/viaje/editar_viaje.php" method="POST">
        <h2>Editar viaje</h2>

        <label for="id_editar_viaje">ID viaje</label>
        <select name="id_editar_viaje" id="id_editar_viaje" required>
            <?php
                while($fila = $viaje->fetch_assoc()){
                    echo "<option value='{$fila['id_viaje']}'>{$fila['id_viaje']}</option>";
                }
            ?>
        </select>

        <label for="id_barco_editar_viaje">ID barco</label>
        <select name="id_barco_editar_viaje" id="id_barco_editar_viaje" required>
            <?php
                while($fila = $barco->fetch_assoc()){
                    echo "<option value='{$fila['id_barco']}'>{$fila['id_barco']}</option>";
                }
            ?>
        </select>

        <label for="id_muelle_editar_viaje">ID muelle</label>        
        <select name="id_muelle_editar_viaje" id="id_muelle_editar_viaje" required>
            <?php
                while($fila = $muelle->fetch_assoc()){
                    echo "<option value='{$fila['id_muelle']}'>{$fila['id_muelle']}</option>";
                }
            ?>
        </select>

        <label for="estado_editar_viaje">Estado</label>
        <select name="estado_editar_viaje" id="estado_editar_viaje">
            <option value="En espera">En Espera</option>
            <option value="En proceso">En Proceso</option>
            <option value="Finalizado">Finalizado</option>
            <option value="Cancelado">Cancelado</option>
        </select>

        <label for="tiempo_estimado_editar_viaje">Tiempo estimado</label>        
        <input id="tiempo_estimado_editar_viaje" name="tiempo_estimado_editar_viaje" type="number" placeholder="Tiempo estimado (hrs)">

        <label for="fecha_fin_editar_viaje">Fecha llegada</label>        
        <input id="fecha_fin_editar_viaje" name="fecha_fin_editar_viaje" type="date">

        <label for="hora_fin_editar_viaje">Hora llegada</label>        
        <input id="hora_fin_editar_viaje" name="hora_fin_editar_viaje" type="time">

        <input value="Editar" type="submit">
    </form>
</body>
</html>