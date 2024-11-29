<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion cliente</title>
</head>
<body>
    <form action="../php/login_cliente.php" method="POST">
        <h2>Iniciar sesion</h2>

        <label for="correo_login_cliente">Correo eletronico</label>
        <input id="correo_login_cliente" name="correo_login_cliente" type="email" placeholder="Ingrese su correo" required>
        <br>

        <label for="contrasena_login_cliente">Contraseña</label>
        <input id="contrasena_login_cliente" name="contrasena_login_cliente" type="password" placeholder="Crear su contraseña" required>
        <br>

        <input type="submit">
        <br>

        <a href="agregar_cliente.php">Registrarse</a>
    </form>
</body>
</html>
