<?php
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
            <?php if(!isset($_SESSION["tipo"])): ?>
            <ul>
                <li><a href="login_cliente.php">Cliente</a></li>
                <li><a href="login_trabajador.php">Trabajador</a></li>
            </ul>
            <?php else: ?>
                <?php if($_SESSION["tipo"]=="cliente"): ?>
                <?php endif; ?>
                <?php if($_SESSION["tipo"]=="cliente"): ?>
                <?php endif; ?>
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