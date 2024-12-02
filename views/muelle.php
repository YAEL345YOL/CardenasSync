<?php
    include "../php/connection.php";
    
    $con = connection();
    $sql1 = "SELECT * FROM muelle";

    $resultado1 = mysqli_query($con,$sql1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar muelle</title>
</head>
<body>
    <form action="../php/agregar_muelle.php" method="POST">
        <h2>Agregar muelle</h2>

        <!-- Nombre -->
        <label for="nombre_agregar_muelle">Nombre</label>
        <input id="nombre_agregar_muelle" name="nombre_agregar_muelle" type="text" placeholder="Nombre del muelle" required>
        <br>

        <!-- Ubicacion -->
        <label for="ubicacion_agregar_muelle">Ubicación</label>
        <input id="ubicacion_agregar_muelle" name="ubicacion_agregar_muelle" type="text" placeholder="Ubicación del muelle" required>
        <br>

        <!-- Boton de enviar -->
        <input type="submit">
    </form>
</body>
</html>
