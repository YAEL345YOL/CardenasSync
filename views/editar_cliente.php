<?php 
include "../php/connection.php";
$con = connection();

$sql1 = "SELECT * FROM cliente WHERE id_cliente = {$_GET["id"]}";

$cliente = $con->query($sql1);
$cliente_fila = $cliente->fetch_assoc();
?>
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
    <form class="form form--size3" action="../php/cliente/editar_cliente.php" method="POST">
        <h2>Editar cliente</h2>

        <label for="id_editar_cliente">ID cliente</label>
        <select id="id_editar_cliente" name="id_editar_cliente" required>
            <?php
                echo "<option value='{$cliente_fila['id_cliente']}'>{$cliente_fila['id_cliente']}</option>";
            ?>
        </select>

        <label for="nombre_editar_cliente">Nombre</label>
        <input id="nombre_editar_cliente" value="<?php echo $cliente_fila["nombre_cliente"] ?>" name="nombre_editar_cliente" type="text" placeholder="Nombre" required>

        <label for="apellido_editar_cliente">Apellido</label>
        <input id="apellido_editar_cliente" value="<?php echo $cliente_fila["apellido_cliente"] ?>" name="apellido_editar_cliente" type="text" placeholder="Apellido" required>

        <label for="fecha_nacimiento_editar_cliente">Fecha nacimiento</label>
        <input id="fecha_nacimiento_editar_cliente" value="<?php echo $cliente_fila["fecha_nacimiento_cliente"] ?>" name="fecha_nacimiento_editar_cliente" type="date" required>

        <label for="correo_editar_cliente">Correo</label>
        <input id="correo_editar_cliente" value="<?php echo $cliente_fila["correo_cliente"] ?>" name="correo_editar_cliente" type="email" placeholder="Correo" required>

        <label for="contrasena_editar_cliente">Contraseña</label>
        <input id="contrasena_editar_cliente" value="<?php echo $cliente_fila["contrasena_cliente"] ?>" name="contrasena_editar_cliente" type="password" placeholder="Contraseña" required>

        <input value="Editar" type="submit">
    </form>
</body>
</html>
