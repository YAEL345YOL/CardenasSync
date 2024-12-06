<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a7358fff6e.js" crossorigin="anonymous"></script>
    <title>Editar cliente</title>
</head>
<body class="body--form body--main">
    <div class="overlay overlay--color"></div>
    <form class="form form--size2" action="../php/cliente/agregar_cliente.php" method="POST">
        <h2>Editar datos</h2>

        <input id="nombre_editar_cliente" name="nombre_editar_cliente" type="text" placeholder="Nombre" required>

        <input id="apellido_editar_cliente" name="apellido_editar_cliente" type="text" placeholder="Apellido" required>

        <input id="fecha_nacimiento_editar_cliente" name="fecha_nacimiento_editar_cliente" type="date" required>

        <input id="correo_editar_cliente" name="correo_editar_cliente" type="email" placeholder="Correo" required>

        <input id="contrasena_editar_cliente" name="contrasena_editar_cliente" type="password" placeholder="Contraseña" required>

        <input value="Enviar" type="submit">
    </form>
</body>
</html>
