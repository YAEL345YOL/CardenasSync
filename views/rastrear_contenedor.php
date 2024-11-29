<?php
include "../php/rastrear_contenedor.php";
$con = connection();



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rastrear contenedor</title>
</head>
<body>
    <form>
        <h2>Rastrear contenedor</h2>

        <!-- Rastrear articulo por id -->
        <label for="id_articulo_rastrear_contenedor">ID contenedor</label>
        <select name="id_articulo_rastrear_contenedor" id="id_articulo_rastrear_contenedor" required>
            <!-- Consulta para obtener los contenedores  -->
        </select>
        <br>

        <!-- Boton de enviar -->
        <input type="submit">
    </form>
</body>
</html>
