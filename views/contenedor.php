<?php 
include "../php/connection.php";
$con = connection();

session_start();

if($_SESSION["tipo"]=="trabajador"){
    $sql1 = "SELECT * FROM contenedor".(isset($_GET["id"]) ? " WHERE id_contenedor = {$_GET["id"]}":"");
}
else if($_SESSION["tipo"]=="cliente"){
    $sql1 = "SELECT * FROM contenedor_cliente
            JOIN contenedor
            ON contenedor_cliente.id_contenedor = contenedor.id_contenedor
            WHERE id_cliente = {$_SESSION["id"]}".(isset($_GET["id"]) ? " AND contenedor.id_contenedor = {$_GET["id"]}":"");
}
    

$contenedor = $con->query($sql1);
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
    <title>Contenedor</title>
</head>
<body>
    <header class="header header--text-white header--color-blue header--title-blue">
        <?php if($_SESSION["tipo"]=="trabajador"): ?>
            <h2>Contenedores</h2>
            <ul>
                <li><a href="agregar_contenedor.php">Agregar</a></li>
                <li><a href="editar_contenedor.php">Editar</a></li>
                <li><a href="eliminar_contenedor.php">Eliminar</a></li>
            </ul>
        <?php else: ?>
            <h2>Mis contenedores</h2>
        <?php endif; ?>
            <form action="../php/contenedor/buscar_contenedor.php" method="POST">
                <input id="id_buscar_contenedor" name="id_buscar_contenedor" type="number" min="0" placeholder="ID contenedor">

                <input value="Buscar" type="submit">
            </form>
    </header>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Tipo</th>
            <th>Tamaño</th>
            <th>Capacidad</th>
            <th>ID_viaje</th>
        </thead>
        <tbody>
            <?php
                while($fila = $contenedor->fetch_assoc()){
                    echo "
                    <tr>
                        <td>{$fila["id_contenedor"]}</td>
                        <td>{$fila["tipo_contenedor"]}</td>
                        <td>{$fila["tamano_contenedor"]}</td>
                        <td>{$fila["capacidad_contenedor"]}</td>
                        <td><a href='viaje.php?id={$fila["id_viaje"]}'>{$fila["id_viaje"]}</a></td>".($_SESSION["tipo"]=="trabajador" ? "
                        <td><a href='eliminar_contenedor.php?id={$fila["id_contenedor"]}'><i class='fa-solid fa-trash'></i></a><a href='editar_contenedor.php?id={$fila["id_contenedor"]}'><i class='fa-solid fa-pen-to-square'></i></a></td>
                    </tr>
                    ":
                    "</tr>");
                }
            ?>
        </tbody>
    </table>
</body>
</html>