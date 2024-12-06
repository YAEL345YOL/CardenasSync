<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a7358fff6e.js" crossorigin="anonymous"></script>
    <title>Registrarse cliente</title>
</head>
<body class="body--form body--main">
    <div class="overlay overlay--color"></div>
    <form class="form form--size2" action="../php/cliente/agregar_cliente.php" method="POST">
        <h2>Registrarse</h2>
        <input id="nombre_agregar_cliente" name="nombre_agregar_cliente" type="text" placeholder="Ingrese su nombre" required>

        <input id="apellido_agregar_cliente" name="apellido_agregar_cliente" type="text" placeholder="Ingrese su apellido" required>

        <input id="fecha_nacimiento_agregar_cliente" name="fecha_nacimiento_agregar_cliente" type="date" required>

        <input id="correo_agregar_cliente" name="correo_agregar_cliente" type="email" placeholder="Ingrese su correo" required>

        <input id="contrasena_agregar_cliente" name="contrasena_agregar_cliente" type="password" placeholder="Crear su contraseña" required>
        <input class="form__button" type="submit" value="Enviar">
    </form>
</body>
</html>
