<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse cliente</title>
</head>
<body>
    <form>
        <h2>Registrarse</h2>

        <label for="nombre_cliente">Nombre</label>
        <input id="nombre_cliente" name="nombre_cliente" type="text" placeholder="Ingrese su nombre" required>
        <br>

        <label for="apellido_cliente">Apellido</label>
        <input id="apellido_cliente" name="apellido_cliente" type="text" placeholder="Ingrese su apellido" required>
        <br>

        <label for="fecha_nacimiento_cliente">Fecha nacimiento</label>
        <input id="fecha_nacimiento_cliente" name="fecha_nacimiento_cliente" type="date" required>
        <br>

        <label for="correo_cliente">Correo eletronico</label>
        <input id="correo_cliente" name="correo_cliente" type="email" placeholder="Ingrese su correo" required>
        <br>

        <label for="contrasena_cliente">Contraseña</label>
        <input id="contrasena_cliente" name="contrasena_cliente" type="password" placeholder="Crear su contraseña" required>
        <br>

        <input type="submit">
    </form>
</body>
</html>