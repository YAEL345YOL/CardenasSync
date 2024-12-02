<?php
    include "../php/connection.php";

    $con = connection();
    $sql1 = "SELECT * FROM barco";
    $sql2 = "SELECT * FROM muelle";
    $sql3 = "SELECT * FROM viaje";

    $resultado1 = mysqli_query($con,$sql1);
    $resultado2 = mysqli_query($con,$sql2);
    $resultado3 = mysqli_query($con,$sql3);
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
    <form action="../php/viaje/agregar_viaje.php" method="POST">
        <h2>Agregar viaje</h2>

        <!-- Id_barco -->
        <label for="id_barco_agregar_viaje">ID barco</label>
        <select name="id_barco_agregar_viaje" id="id_barco_agregar_viaje" required>
            <?php
                while($fila = mysqli_fetch_assoc($resultado1)){
                    echo "<option value='{$fila['id_barco']}'>{$fila['id_barco']}</option>";
                }
            ?>
        </select>
        <br>

        <!-- Muelle llegada -->
        <label for="id_muelle_agregar_viaje">ID muelle</label>        
        <select name="id_muelle_agregar_viaje" id="id_muelle_agregar_viaje" required>
            <?php
                while($fila = mysqli_fetch_assoc($resultado2)){
                    echo "<option value='{$fila['id_muelle']}'>{$fila['id_muelle']}</option>";
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
    <form action="../php/editar_viaje.php" method="POST">
        <h2>Editar viaje</h2>

        <!-- ID viaje -->
        <label for="id_editar_viaje">ID viaje</label>
        <select name="id_editar_viaje" id="id_editar_viaje" required>
            <?php
                while($fila = mysqli_fetch_assoc($resultado3)){
                    echo "<option value='{$fila['id_viaje']}'>{$fila['id_viaje']}</option>";
                }
            ?>
        </select>
        <br>

        <!-- Estado -->
        <label for="estado_editar_viaje">Estado</label>
        <select name="estado_editar_viaje" id="estado_editar_viaje">
            <option value="En espera">En Espera</option>
            <option value="En proceso">En Proceso</option>
            <option value="Finalizado">Finalizado</option>
            <option value="Cancelado">Cancelado</option>
        </select>
        <br>

        <!-- Fecha llegada -->
        <label for="fecha_fin_editar_viaje">Fecha llegada</label>        
        <input id="fecha_fin_editar_viaje" name="fecha_fin_editar_viaje" type="date">
        <br>

        <!-- Hora llegada -->
        <label for="hora_fin_editar_viaje">Hora llegada</label>        
        <input id="hora_fin_editar_viaje" name="hora_fin_editar_viaje" type="time">
        <br>

        <!-- Actualizaciones -->
        <label for="actualizaciones_editar_viaje">Actualizaciones</label>
        <br>
        <textarea id="actualizaciones_editar_viaje" name="actualizaciones_editar_viaje" placeholder="Actualizaciones del viaje"></textarea>
        <br>

        <!-- Boton de enviar -->
        <input type="submit">
    </form>
    <table>
        <thead>
            <th>id</th>
            <th>fecha inicio</th>
            <th>fecha fin</th>
            <th>hora inicio</th>
            <th>hora fin</th>
            <th>origen</th>
            <th>actualizacion</th>
            <th>estado</th>
            <th>tiempo estimado</th>
            <th>id barco</th>
            <th>id muelle</th>
        </thead>
        <tbody>
            <?php
                mysqli_data_seek($resultado3, 0);
                while($fila = mysqli_fetch_assoc($resultado3)){
                    echo "
                    <tr>
                        <td>{$fila["id_viaje"]}</td>
                        <td>{$fila["fecha_inicio_viaje"]}</td>
                        <td>{$fila["fecha_fin_viaje"]}</td>
                        <td>{$fila["hora_inicio_viaje"]}</td>
                        <td>{$fila["hora_fin_viaje"]}</td>
                        <td>{$fila["origen_viaje"]}</td>
                        <td>{$fila["actualizacion_viaje"]}</td>
                        <td>{$fila["estado_viaje"]}</td>
                        <td>{$fila["tiempo_estimado_viaje"]}</td>
                        <td>{$fila["id_barco"]}</td>
                        <td>{$fila["id_muelle"]}</td>
                    </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
