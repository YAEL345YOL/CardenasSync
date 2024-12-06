<?php
include "../php/connection.php";
$con = connection();

$sql1 = "SELECT * FROM barco".(isset($_GET["id"]) ? " WHERE id_barco = '{$_GET["id"]}'" : "");

$barco = $con->query($sql1);
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
    <title>barco</title>
</head>
<body>
    <header class="header header--text-white header--color-blue header--title-blue">
        <h2>Barcos</h2>
        <ul>
            <li><a href="agregar_barco.php">Agregar</a></li>
            <li><a href="editar_barco.php">Editar</a></li>
            <li><a href="eliminar_barco.php">Eliminar</a></li>
        </ul>
        <form action="../php/barco/buscar_barco.php" method="POST">
            <input id="id_buscar_barco" name="id_buscar_barco" type="number" placeholder="Ingrese id barco">
    
            <input value="Buscar" type="submit">
        </form>
    </header>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Nacionalidad</th>
        </thead>
        <tbody>
            <?php
                $barco->data_seek(0);
                while ($fila = $barco->fetch_assoc()) {
                    echo "
                    <tr>
                        <td>{$fila["id_barco"]}</td>
                        <td>{$fila["nombre_barco"]}</td>
                        <td>{$fila["tipo_barco"]}</td>
                        <td>{$fila["nacionalidad_barco"]}</td>
                        <td><a href='eliminar_barco.php?id={$fila["id_barco"]}'><i class='fa-solid fa-trash'></i></a><a href='editar_barco.php?id={$fila["id_barco"]}'><i class='fa-solid fa-pen-to-square'></i></a></td>
                    </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
</body>
</html>