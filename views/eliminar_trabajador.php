<?php
include "../php/connection.php";
$con = connection();

$sql1 = "SELECT * FROM trabajador WHERE id_trabajador={$_GET["id"]}";

$trabajador = $con->query($sql1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a7358fff6e.js" crossorigin="anonymous"></script>
    <title>Eliminar trabajador</title>
</head>
<body class="body--form body--main">
    <form class="form form--size1" action="../php/trabajador/eliminar_trabajador.php" method="POST">
        <h2>Eliminar trabajador</h2>

        <label for="id_eliminar_trabajador">ID trabajador</label>
        <select id="id_eliminar_trabajador" name="id_eliminar_trabajador">
            <?php
                while($fila = $trabajador->fetch_assoc()){
                    echo "<option value='{$fila['id_trabajador']}'>{$fila['id_trabajador']}</option>";
                }
            ?>
        </select>

        <input value="Eliminar" type="submit">
    </form>
</body>
</html>
