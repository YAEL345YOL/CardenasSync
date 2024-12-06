<?php
include "../php/connection.php";
$con = connection();
session_start();
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
    <title>CardenasSync</title>
</head>
<body class="body--main">
    <div class="overlay overlay--main"></div>
    <header class="header header--text-white header--title-blue">
        <nav>
            <ul>
            <?php if($_SESSION["tipo"]=="cliente"): ?>
                <li><a href="contenedor.php">Mis contenedores</a></li>
                <li><a href="viaje.php">Mis viajes</a></li>
            <?php elseif($_SESSION["tipo"]=="trabajador"): ?>
                <li><a href="contenedor.php">Contenedores</a></li>
                <li><a href="barco.php">Barcos</a></li>
                <li><a href="viaje.php">Viajes</a></li>
                <li><a href="trabajador.php">Trabajadores</a></li>
                <li><a href="muelle.php">Muelles</a></li>
                <li><a href="contenedor_cliente.php">Contenedor/Cliente</a></li>
                <li><a href="viaje_trabajador.php">Viaje/Trabajador</a></li>
            <?php else: ?>
                <h2>CardenasSync</h2>
            <?php endif; ?>
            </ul>
        </nav>
        <nav>
            <ul>
            <?php if(isset($_SESSION["tipo"])): ?>
                <li><a href="" title="Cambiar mis datos"><i class="fa-solid fa-user"></i></a></li>
                <li><a href="../php/cerrar_sesion.php" title="Cerrar sesión" ><i class="fa-solid fa-right-from-bracket"></i></a></li>
            <?php else: ?>
                <li><a href="login_cliente.php">Cliente</a></li>
                <li><a href="login_trabajador.php">Trabajador</a></li>
            <?php endif; ?>
            </ul>
        </nav>
    </header>
</body>
</html>