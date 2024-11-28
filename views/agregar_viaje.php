<?php
include "../php/connection.php";

$con = connection();
$sql1 = "SELECT * FROM barco";
$sql2 = "SELECT * FROM muelle";

$resultado1 = mysqli_query($con,$sql1);
$resultado2 = mysqli_query($con,$sql2);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar viaje</title>
</head>
<body>
    <form action="../php/agregar_viaje.php" method="POST">
        <h2>Agregar viaje</h2>

        <!-- Id_barco -->
        <label for="id_barco_viaje">ID barco</label>
        <select name="id_barco_viaje" id="id_barco_viaje" required>
            <?php
                while($row = $resultado1->fetch_assoc()){
                    echo "<option value='{$row['id_barco']}'>{$row['id_barco']}</option>";
                }
            ?>
        </select>
        <br>

        <!-- Muelle llegada -->
        <label for="id_muelle_viaje">ID muelle</label>        
        <select name="id_muelle_viaje" id="id_muelle_viaje" required>
            <?php
                while($row = $resultado2->fetch_assoc()){
                    echo "<option value='{$row['id_muelle']}'>{$row['id_muelle']}</option>";
                }
            ?>
        </select>
        <br>

        <!-- Fecha inicio -->
        <label for="fecha_inicio_viaje">Fecha inicio</label>        
        <input id="fecha_inicio_viaje" name="fecha_inicio_viaje" type="date">
        <br>

        <!-- Hora inicio -->
        <label for="hora_inicio_viaje">Hora inicio</label>        
        <input id="hora_inicio_viaje" name="hora_inicio_viaje" type="time">
        <br>

        <!-- Origen -->
        <label for="origen_viaje">Origen</label>        
        <input id="origen_viaje" name="origen_viaje" type="text" placeholder="Origen del viaje">
        <br>

        <!-- tiempo estimado -->
        <label for="tiempo_estimado_viaje">Tiempo estimado</label>        
            <input id="tiempo_estimado_viaje" name="tiempo_estimado_viaje" type="number" placeholder="Tiempo estimado (hrs)">
        <br>

        <!-- Boton de enviar -->
        <input type="submit">
    </form>
</body>
</html>
