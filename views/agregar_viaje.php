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
        <label for="id_barco_agregar_viaje">ID barco</label>
        <select name="id_barco_agregar_viaje" id="id_barco_agregar_viaje" required>
            <?php
                while($fila = mysqli_fetch_assoc($resultado)){
                    echo "<option value='{$fila['id_barco']}'>{$fila['id_barco']}</option>";
                }
            ?>
        </select>
        <br>

        <!-- Muelle llegada -->
        <label for="id_muelle_agregar_viaje">ID muelle</label>        
        <select name="id_muelle_agregar_viaje" id="id_muelle_agregar_viaje" required>
            <?php
                while($fila = mysqli_fetch_assoc($resultado)){
                    echo "<option value='{$fila['id_barco']}'>{$fila['id_barco']}</option>";
                }
            ?>
        </select>
        <br>

        <!-- Fecha inicio -->
        <label for="fecha_inicio_agregar_viaje">Fecha inicio</label>        
        <input id="fecha_inicio_agregar_viaje" name="fecha_inicio_agregar_viaje" type="date" required>
        <br>

        <!-- Hora inicio -->
        <label for="hora_inicio_agregar_viaje">Hora inicio</label>        
        <input id="hora_inicio_agregar_viaje" name="hora_inicio_agregar_viaje" type="time" required>
        <br>

        <!-- Origen -->
        <label for="origen_agregar_viaje">Origen</label>        
        <input id="origen_agregar_viaje" name="origen_agregar_viaje" type="text" placeholder="Origen del viaje" required>
        <br>

        <!-- tiempo estimado -->
        <label for="tiempo_estimado_agregar_viaje">Tiempo estimado</label>        
            <input id="tiempo_estimado_agregar_viaje" name="tiempo_estimado_agregar_viaje" type="number" placeholder="Tiempo estimado (hrs)">
        <br>

        <!-- Boton de enviar -->
        <input type="submit">
    </form>
</body>
</html>
