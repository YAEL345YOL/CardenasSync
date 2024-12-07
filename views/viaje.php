<?php
include "../php/connection.php";

session_start();

$con = connection();

if($_SESSION["tipo"]=="trabajador"){
    $sql1 = "SELECT * FROM viaje".(isset($_GET["id"]) ? " WHERE id_viaje = {$_GET["id"]}":"");
}
else if($_SESSION["tipo"]=="cliente"){
    $sql1 = "SELECT DISTINCT 
            viaje.id_viaje,
            viaje.fecha_inicio_viaje,
            viaje.fecha_fin_viaje,
            viaje.hora_inicio_viaje,
            viaje.hora_fin_viaje,
            viaje.origen_viaje,
            viaje.estado_viaje,
            viaje.tiempo_estimado_viaje,
            viaje.id_barco,
            viaje.id_muelle
            FROM contenedor
            JOIN contenedor_cliente
            ON contenedor.id_contenedor = contenedor_cliente.id_contenedor
            JOIN viaje
            ON contenedor.id_viaje = viaje.id_viaje".(isset($_GET["id"]) ? " WHERE viaje.id_viaje = {$_GET["id"]}":"");
}
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
    <title>Viaje</title>
</head>
<body>
    <header class="header header--text-white header--color-blue header--title-blue">
        <a href="index.php"><i class="fa-solid fa-house"></i></a>
        <?php if($_SESSION["tipo"]=="trabajador"): ?>
            <h2>Viajes</h2>
            <ul>
                <li><a href="agregar_viaje.php">Agregar</a></li>
            </ul>
        <?php else: ?>
            <h2>Mis viajes</h2>
        <?php endif; ?>
            <form action="../php/viaje/buscar_viaje.php" method="POST">
                <input id="id_buscar_viaje" name="id_buscar_viaje" type="number" placeholder="ID viaje">

                <input value="Buscar" type="submit">
            </form>
    </header>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Fecha inicio</th>
            <th>Fecha fin</th>
            <th>Hora inicio</th>
            <th>Hora fin</th>
            <th>Origen</th>
            <th>Estado</th>
            <th>Tiempo estimado</th>
            <th>ID barco</th>
            <th>ID muelle</th>
        </thead>
        <tbody>
        <?php
            while($fila = $viaje->fetch_assoc()){
                $hora_inicio = date("H:i", strtotime($fila["hora_inicio_viaje"])); 
                $hora_fin = date("H:i", strtotime($fila["hora_fin_viaje"]));       
                echo "
                <tr>
                    <td>{$fila["id_viaje"]}</td>
                    <td>{$fila["fecha_inicio_viaje"]}</td>
                    <td>{$fila["fecha_fin_viaje"]}</td>
                    <td>{$hora_inicio}</td>
                    <td>{$hora_fin}</td>
                    <td>{$fila["origen_viaje"]}</td>
                    <td>{$fila["estado_viaje"]}</td>
                    <td>{$fila["tiempo_estimado_viaje"]}</td>".($_SESSION["tipo"]=="trabajador" ?
                    "
                    <td><a href='barco.php?id={$fila["id_barco"]}'>{$fila["id_barco"]}</a></td>
                    <td><a href='muelle.php?id={$fila["id_muelle"]}'>{$fila["id_muelle"]}</a></td>
                    <td><a href='eliminar_viaje.php?id={$fila["id_viaje"]}'><i class='fa-solid fa-trash'></i></a><a href='editar_viaje.php?id={$fila["id_viaje"]}'><i class='fa-solid fa-pen-to-square'></i></a></td>
                </tr>
                    " : "
                    <td>{$fila["id_barco"]}</td>
                    <td>{$fila["id_muelle"]}</td>
                </tr>
                    ");
            }
        ?>
        </tbody>
    </table>
</body>
</html>