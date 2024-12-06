<?php
include "../php/connection.php";
$con = connection();

$sql1 = "SELECT * FROM viaje";
 
$viaje = $con->query($sql1);
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
    <title>Agregar contenedor</title>
</head>
<body class="body--form body--main">
    <form class="form form--size1" action="../php/contenedor/agregar_contenedor.php" method="POST">
        <h2>Agregar contenedor</h2>

        <label for="id_viaje_agregar_contenedor">ID viaje</label>
        <select id="id_viaje_agregar_contenedor" name="id_viaje_agregar_contenedor" required>
            <?php
                while($fila = $viaje->fetch_assoc()){
                    echo "<option value='{$fila['id_viaje']}'>{$fila['id_viaje']}</option>";
                }
            ?>
        </select>
            
        <label for="tipo_agregar_contenedor">Tipo de contenedor</label>
        <select id="tipo_agregar_contenedor" name="tipo_agregar_contenedor" required>
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
            
        <label for="tamano_agregar_contenedor">Tamaño</label>
        <select name="tamano_agregar_contenedor" id="tamano_agregar_contenedor" required>
            <option value="10ft">10 pies (10')</option>
            <option value="20ft">20 pies (20')</option>
            <option value="40ft">40 pies (40')</option>
            <option value="40ft HC">40 pies (40 HC')</option>
            <option value="45ft">45 pies (45')</option>
            <option value="53ft">53 pies (53')</option>
        </select>
            
        <label for="capacidad_agregar_contenedor">Capacidad</label>
        <input id="capacidad_agregar_contenedor" name="capacidad_agregar_contenedor" min="10" type="number" placeholder="Capacidad (t)" required>

        <input value="Agregar" type="submit">
    </form>
</body>
</html>