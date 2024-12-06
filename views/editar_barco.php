<?php
include "../php/connection.php";
$con = connection();

$sql1 = "SELECT * FROM barco WHERE id_barco = {$_GET["id"]}";

$barco = $con->query($sql1);
$barco_fila = $barco->fetch_assoc();
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
    <title>Editar barco</title>
</head>
<body class="body--form body--main">
    <form class="form form--size1" action="../php/barco/editar_barco.php" method="POST">
        <h2>Editar barco</h2>

        <label for="id_editar_barco">ID barco</label>
        <select name="id_editar_barco" id="id_editar_barco" required>
            <?php
                echo "<option value='{$barco_fila['id_barco']}'>{$barco_fila['id_barco']}</option>";
            ?>
        </select>

        <label for="nombre_editar_barco">Nombre del barco</label>
        <input id="nombre_editar_barco" value="<?php echo $barco_fila['nombre_barco'] ?>" name="nombre_editar_barco" type="text" placeholder="Nombre del barco" required>

        <label for="tipo_editar_barco">Tipo de barco</label>
        <select id="tipo_editar_barco" name="tipo_editar_barco" required>
            <?php iterate_select($tipos_barco,$barco_fila["tipo_barco"]) ?>
        </select>

        <label for="nacionalidad_editar_barco">Nacionalidad</label>
        <select id="nacionalidad_editar_barco" name="nacionalidad_editar_barco" list="nacionalidad_editar" placeholder="Nacionalidad" required>
            <?php iterate_select($paises,$barco_fila["nacionalidad_barco"]) ?>
        </select>

        <input value="Editar" type="submit">
    </form>
</body>
</html>