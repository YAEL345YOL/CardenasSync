<?php
include "../php/connection.php";
$con = connection();

$sql1 = "SELECT * FROM contenedor".(isset($_GET["id"]) ? " WHERE id_contenedor = {$_GET["id"]}":"");
$sql2 = "SELECT * FROM viaje";

$contenedor = $con->query($sql1); 
$viaje = $con->query($sql2);
$contenedor_fila = $contenedor->fetch_assoc();
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
    <title>Editar contenedor</title>
</head>
<body class="body--form body--main">
    <form class="form form--size1" action="../php/contenedor/editar_contenedor.php" method="POST">
        <h2>Editar contenedor</h2>

        <label for="id_editar_contenedor">ID contenedor</label>
        <select id="id_editar_contenedor" name="id_editar_contenedor" required>
            <?php
                echo "<option value='{$contenedor_fila['id_contenedor']}'>{$contenedor_fila['id_contenedor']}</option>";
            ?>
        </select>
            
        <label for="id_viaje_editar_contenedor">ID viaje</label>
        <select id="id_viaje_editar_contenedor" name="id_viaje_editar_contenedor" required>
            <?php
                while($fila = $viaje->fetch_assoc()){
                    $selected = ($fila["id_viaje"]==$contenedor_fila["id_viaje"] ? "selected":"");
                    echo "<option value='{$fila['id_viaje']}' {$selected} >{$fila['id_viaje']}</option>";
                }
            ?>
        </select>
            
        <label for="tipo_editar_contenedor">Tipo de contenedor</label>
        <select id="tipo_editar_contenedor" name="tipo_editar_contenedor" required>
            <?php iterate_select($tipos_contenedor,$contenedor_fila["tipo_contenedor"]) ?>
        </select>
            
        <label for="tamano_editar_contenedor">Tamaño</label>
        <select name="tamano_editar_contenedor" id="tamano_editar_contenedor" required>
            <?php iterate_select($tamanos_contenedor,$contenedor_fila["tamano_contenedor"]) ?>
        </select>
            
        <label for="capacidad_editar_contenedor">Capacidad</label>
        <input id="capacidad_editar_contenedor" value="<?php echo $contenedor_fila["capacidad_contenedor"] ?>" name="capacidad_editar_contenedor" type="number" placeholder="Capacidad (t)" min="10" required>

        <input value="Editar" type="submit">
    </form>
</body>
</html>