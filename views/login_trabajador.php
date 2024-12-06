<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a7358fff6e.js" crossorigin="anonymous"></script>
    <title>Iniciar sesión trabajador</title>
</head>
<body class="body--form body--main">
    <div class="overlay overlay--color"></div>
    <?php 
        if(isset($_GET["error"])){
            echo "<div class='notification notification--error'>
            <i class='fa-solid fa-triangle-exclamation'></i>
            <p>Error, datos incorrectos</p></div>";
        }
    ?>
    <form class="form form--size1" action="../php/trabajador/login_trabajador.php" method="POST">
        <h2>Iniciar sesión</h2>

        <input id="id_login_trabajador" name="id_login_trabajador" type="number" placeholder="ID trabajador" required>

        <input id="contrasena_login_trabajador" name="contrasena_login_trabajador" type="password" placeholder="Contraseña" required>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
