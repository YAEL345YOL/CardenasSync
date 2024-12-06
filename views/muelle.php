<?php
include "../php/connection.php";
$con = connection();

$sql1 = "SELECT * FROM muelle".(isset($_GET["id"]) ? " WHERE id_muelle = {$_GET["id"]}":"");

$muelle = $con->query($sql1);
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
    <title>Muelles</title>
</head>
<body>
    <header class="header header--text-white header--color-blue header--title-blue">
        <h2>Muelles</h2>
        <ul>
            <li><a href="agregar_muelle.php">Agregar</a></li>
            <li><a href="editar_muelle.php">Editar</a></li>
            <li><a href="eliminar_muelle.php">Eliminar</a></li>
        </ul>
        <form action="../php/muelle/buscar_muelle.php" method="POST">
            <input id="id_buscar_muelle" name="id_buscar_muelle" type="text" placeholder="Ingrese ID muelle">
    
            <input value="Buscar" type="submit">
        </form>
    </header>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Ubicacion</th>
        </thead>
        <tbody>
        <?php
            while($fila = $muelle->fetch_assoc()){
                echo "
                <tr>
                    <td>{$fila["id_muelle"]}</td>
                    <td>{$fila["nombre_muelle"]}</td>
                    <td>{$fila["ubicacion_muelle"]}</td>
                    <td><a href='eliminar_muelle.php?id={$fila["id_muelle"]}'><i class='fa-solid fa-trash'></i></a><a href='editar_muelle.php?id={$fila["id_muelle"]}'><i class='fa-solid fa-pen-to-square'></i></a></td>
                </tr>
                ";
            }
        ?>
        </tbody>
    </table>
</body>
</html>
