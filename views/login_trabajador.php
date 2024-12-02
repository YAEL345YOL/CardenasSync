<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesion trabajador</title>
</head>
<body>
    <?php 
        if(isset($_GET["error"])){
            echo "<p>Error, datos incorrectos</p>";
        }
    ?>
    <form action="../php/trabajador/login_trabajador.php" method="POST">
        <h2>Iniciar sesion</h2>

        <label for="id_login_trabajador">ID trabajador</label>
        <input id="id_login_trabajador" name="id_login_trabajador" type="number" placeholder="Ingrese su id" required>
        <br>

        <label for="contrasena_login_trabajador">Contraseña</label>
        <input id="contrasena_login_trabajador" name="contrasena_login_trabajador" type="password" placeholder="Ingrese su contraseña" required>
        <br>

        <input type="submit">
    </form>
</body>
</html>
