<?php 
include "../php/connection.php";
$con = connection();

$sql1 = "SELECT * FROM barco";
$sql2 = "SELECT * FROM muelle";

$barco = $con->query($sql1);
$muelle = $con->query($sql2);
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
    <title>Agregar viaje</title>
</head>
<body class="body--form body--main">
    <form class="form form--size3" action="../php/viaje/agregar_viaje.php" method="POST">
        <h2>Agregar viaje</h2>

        <label for="id_barco_agregar_viaje">ID barco</label>
        <select name="id_barco_agregar_viaje" id="id_barco_agregar_viaje" required>
            <?php
                while($fila = $barco->fetch_assoc()){
                    echo "<option value='{$fila['id_barco']}'>{$fila['id_barco']}</option>";
                }
            ?>
        </select>

        <label for="id_muelle_agregar_viaje">ID muelle</label>        
        <select name="id_muelle_agregar_viaje" id="id_muelle_agregar_viaje" required>
            <?php
                while($fila = $muelle->fetch_assoc()){
                    echo "<option value='{$fila['id_muelle']}'>{$fila['id_muelle']}</option>";
                }
            ?>
        </select>

        <label for="fecha_inicio_agregar_viaje">Fecha inicio</label>        
        <input id="fecha_inicio_agregar_viaje" name="fecha_inicio_agregar_viaje" type="date" required>

        <label for="hora_inicio_agregar_viaje">Hora inicio</label>        
        <input id="hora_inicio_agregar_viaje" name="hora_inicio_agregar_viaje" type="time" required>

        <label for="origen_agregar_viaje">Origen</label>        
        <input id="origen_agregar_viaje" name="origen_agregar_viaje" type="text" placeholder="Origen del viaje" required>

        <label for="tiempo_estimado_agregar_viaje">Tiempo estimado</label>        
        <input id="tiempo_estimado_agregar_viaje" name="tiempo_estimado_agregar_viaje" type="number" placeholder="Tiempo estimado (hrs)">

        <input value="Agregar" type="submit">
    </form>
</body>
</html>