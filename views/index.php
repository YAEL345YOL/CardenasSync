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
                <a href="contenedor_cliente.php">contenedor_cliente</a>
            <?php else: ?>
                <ul>
                    <li><a href="login_cliente.php">cliente</a></li>
                    <li><a href="login_trabajador.php">trabajador</a></li>
                </ul>
            <?php endif; ?>
            <?php if(isset($_SESSION["tipo"])): ?>
                <a href="../php/cerrar_sesion.php">cerrar sesion</a>
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