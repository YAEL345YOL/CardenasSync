<?php
include "../php/connection.php";

$con = connection();
$sql = "SELECT * FROM viaje";

$resultado = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar viaje</title>
</head>
<body>
    <form action="../php/actualizar_viaje.php" method="POST">
        <h2>Actualizar viaje</h2>

        <!-- ID viaje -->
        <label for="id_actualizar_viaje">ID viaje</label>
        <select name="id_actualizar_viaje" id="id_actualizar_viaje" required>
            <?php
                while($fila = mysqli_fetch_assoc($resultado)){
                    echo "<option value='{$fila['id_viaje']}'>{$fila['id_viaje']}</option>";
                }
            ?>
        </select>
        <br>

        <!-- Estado -->
        <label for="estado_actualizar_viaje">Estado</label>
        <select name="estado_actualizar_viaje" id="estado_actualizar_viaje">
            <option value="En espera">En Espera</option>
            <option value="En proceso">En Proceso</option>
            <option value="Finalizado">Finalizado</option>
            <option value="Cancelado">Cancelado</option>
        </select>
        <br>

        <!-- Fecha llegada -->
        <label for="fecha_fin_actualizar_viaje">Fecha llegada</label>        
        <input id="fecha_fin_actualizar_viaje" name="fecha_fin_actualizar_viaje" type="date">
        <br>

        <!-- Hora llegada -->
        <label for="hora_fin_actualizar_viaje">Hora llegada</label>        
        <input id="hora_fin_actualizar_viaje" name="hora_fin_actualizar_viaje" type="time">
        <br>

        <!-- Actualizaciones -->
        <label for="actualizaciones_actualizar_viaje">Actualizaciones</label>
        <br>
        <textarea id="actualizaciones_actualizar_viaje" name="actualizaciones_actualizar_viaje" placeholder="Actualizaciones del viaje"></textarea>
        <br>

        <!-- Boton de enviar -->
        <input type="submit">
    </form>
</body>
</html>
