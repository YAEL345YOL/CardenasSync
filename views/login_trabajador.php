<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion trabajador</title>
</head>
<body>
    <form action="../php/login_trabajador.php" method="POST">
        <h2>Iniciar sesion trabajador</h2>

        <label for="id_trabajador_login">ID trabajador</label>
        <input id="id_trabajador_login" name="id_trabajador_login" type="email" placeholder="Ingrese su id" required>
        <br>

        <label for="contrasena_trabajador_login">Contraseña</label>
        <input id="contrasena_trabajador_login" name="contrasena_trabajador_login" type="password" placeholder="Ingrese su contraseña" required>
        <br>

        <input type="submit">
    </form>
</body>
</html>
