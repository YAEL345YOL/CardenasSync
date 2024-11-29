<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar barco</title>
</head>
<body>
    <form action="../php/agregar_barco.php" method="POST">
        <h2>Agregar barco</h2>
        
        <!-- Nombre del Barco -->
        <label for="nombre_barco">Nombre del barco</label>
        <input id="nombre_barco" name="nombre_barco" type="text" placeholder="Nombre del barco" required>
        <br>

        <!-- Tipo de Barco -->
        <label for="tipo_barco">Tipo de barco</label>
        <select id="tipo_barco" name="tipo_barco" required>
            <option value="Portacontenedores">Portacontenedores</option>
            <option value="Granelero">Granelero</option>
            <option value="Petrolero">Petrolero</option>
            <option value="Gasero">Gasero</option>
            <option value="Quimiquero">Quimiquero</option>
        </select>
        <br>

        <!-- Nacionalidad -->
        <label for="nacionalidad_barco">Nacionalidad</label>
        <input id="nacionalidad_barco" name="nacionalidad_barco" type="text" placeholder="Nacionalidad del barco" required>
        <br>

        <!-- Boton de enviar -->
        <input type="submit">
    </form>
</body>
</html>
