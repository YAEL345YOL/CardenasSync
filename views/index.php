<?php
include "../php/connection.php";

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
    <header class="header">
        <nav class="header__nav">
            <ul class="header__list">
            <?php if($_SESSION["tipo"]=="cliente"): ?>
                <li class="header__list-element"><a class="header__link" href="contenedor.php">Mis contenedores</a></li>
            <?php elseif($_SESSION["tipo"]=="trabajador"): ?>
                <li class="header__list-element"><a class="header__link" href="contenedor.php">Contenedores</a></li>
                <li class="header__list-element"><a class="header__link" href="barco.php">Barcos</a></li>
                <li class="header__list-element"><a class="header__link" href="viaje.php">Viajes</a></li>
                <li class="header__list-element"><a class="header__link" href="trabajador.php">Trabajadores</a></li>
                <li class="header__list-element"><a class="header__link" href="muelle.php">Muelles</a></li>
                <li class="header__list-element"><a class="header__link" href="contenedor_cliente.php">Contenedor/Cliente</a></li>
            <?php else: ?>
                <h2 class="header__title">CardenasSync</h2>
            <?php endif; ?>
            </ul>
        </nav>
        <nav class="header__nav">
            <ul class="header__list">
            <?php if(isset($_SESSION["tipo"])): ?>
                <li class="header__list-element"><a class="header__link" href="" title="Cambiar mis datos" ><i class="fa-solid fa-user"></i></a></li>
                <li class="header__list-element"><a class="header__link" href="../php/cerrar_sesion.php" title="Cerrar sesión" ><i class="fa-solid fa-right-from-bracket"></i></a></li>
            <?php else: ?>
                <li class="header__list-element"><a class="header__link" href="login_cliente.php">Cliente</a></li>
                <li class="header__list-element"><a class="header__link" href="login_trabajador.php">Trabajador</a></li>
            <?php endif; ?>
            </ul>
        </nav>
    </header>
    <main class="main">

    </main>
    <footer class="footer">

    </footer>
</body>
</html>