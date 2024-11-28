<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar viaje</title>
</head>
<body>
    <form>
        <h2>Actualizar viaje</h2>

        <!-- ID viaje -->
        <label for="id_viaje_actualizar_viaje">ID viaje</label>
        <select name="id_viaje_actualizar_viaje" id="id_viaje_actualizar_viaje">
            <!-- Opciones para viajes -->
        </select>
        <br>

        <!-- Estado -->
         <label for="estado_actualizar_viaje">Estado</label>
        <select name="estado_actualizar_viaje" id="estado_actualizar_viaje">
            <option>En Proceso</option>
            <option>En Espera</option>
            <option>Completado</option>
            <option>Cancelado</option>
            <option>Retrasado</option>
            <option>En Ruta</option>
            <option>Llegado</option>
        </select>
        <br>

        <!-- Fecha llegada -->
        <label for="fecha_llegada_actualizar_viaje">Fecha llegada</label>        
        <input id="fecha_llegada_actualizar_viaje" name="fecha_llegada_actualizar_viaje" type="date">
        <br>

        <!-- Hora llegada -->
        <label for="hora_llegada_actualizar_viaje">Hora llegada</label>        
        <input id="hora_llegada_actualizar_viaje" name="hora_llegada_actualizar_viaje" type="time">
        <br>

        <!-- Actualizaciones -->
        <label for="actualizaciones_actualizar_viaje">Actualizaciones</label>
        <br>
        <textarea id="actualizaciones_actualizar_viaje" name="actualizaciones_actualizar_viaje" placeholder="Actualizaciones del viaje (comentarios)"></textarea>
        <br>

        <!-- Boton de enviar -->
        <input type="submit"/>
    </form>
</body>
</html>