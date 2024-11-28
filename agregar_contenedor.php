<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Contenedor</title>
</head>
<body>
    <form action="p_agregar_contenedor.php" method="POST">
        <h2>Agregar contenedor</h2>

        <!-- Id viaje -->
        <label for="id_viaje_contenedor">ID viaje</label>
        <select id="id_viaje_contenedor" name="id_viaje_contenedor">
            <!-- Opciones de viajes -->
        </select>
        <br>

        <!-- Tipo de contenedor -->
        <label for="tipo_contenedor">Tipo de contenedor</label>
        <select id="tipo_contenedor" name="tipo_contenedor">
            <option value="Seco">Seco</option>
            <option value="Refrigerado">Refrigerado</option>
            <option value="Techo Abierto">Techo Abierto</option>
            <option value="Plataforma">Plataforma</option>
            <option value="Lado abierto">Lado abierto</option>
            <option value="Gran altura">Gran altura</option>
            <option value="Tanque">Tanque</option>
            <option value="Ventilacion">Ventilación</option>
            <option value="Carga a granel">Carga a granel</option>
            <option value="Aislante">Aislante</option>
            <option value="Carga no paletizada">Carga no paletizada</option>
        </select>
        <br>

        <!-- tamaño estandarizado -->
        <label for="tamano_contenedor">Tamaño</label>
        <select name="tamano_contenedor" id="tamano_contenedor">
            <option value="10ft">10 pies (10')</option>
            <option value="20ft">20 pies (20')</option>
            <option value="40ft">40 pies (40')</option>
            <option value="40ft HC">40 pies (40 HC')</option>
            <option value="45ft">45 pies (45')</option>
            <option value="53ft">53 pies (53')</option>
        </select>
        <br>

        <!-- Capacidad -->
        <label for="capacidad_contenedor">Capacidad</label>
        <input id="capacidad_contenedor" name="capacidad_contenedor" type="number" placeholder="Capacidad (kg)">
        <br>

        <!-- Boton de enviar -->
        <input type="submit">
    </form>
</body>
</html>
