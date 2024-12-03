<?php
include "../php/connection.php";

session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CardenasSync</title>
</head>
<body>
    <header>
        <nav>
            <?php if($_SESSION["tipo"]=="cliente"): ?>
            <a href="contenedor.php">mis contenedores</a>
            <?php elseif($_SESSION["tipo"]=="trabajador"): ?>
            <a href="contenedor.php">contenedores</a>
            <a href="barco.php">barcos</a>
            <a href="viaje.php">viajes</a>
            <a href="trabajador.php">trabajador</a>
            <a href="muelle.php">muelle</a>
            <?php else: ?>
            <ul>
                <li><a href="login_cliente.php">Cliente</a></li>
                <li><a href="login_trabajador.php">Trabajador</a></li>
            </ul>
            <?php endif; ?>

            <?php if(isset($_SESSION["tipo"])): ?>
            <a href="../php/cerrar_sesion.php">Cerrar sesion</a>
            <?php endif; ?>
        </nav>
    </header>
    <main>
        <h1>CardenasSync</h1>
    </main>
    <footer>
    </footer>
</body>
</html>