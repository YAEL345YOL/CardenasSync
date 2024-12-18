<?php 
include "../php/connection.php";
$con = connection();

$sql1 = "SELECT * FROM trabajador WHERE id_trabajador = {$_GET["id"]}";

$trabajador = $con->query($sql1);
$trabajador_fila = $trabajador->fetch_assoc();
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
    <title>Editar trabajador</title>
</head>
<body class="body--form body--main">
    <div class="overlay overlay--color"></div>
    <form class="form form--size3" action="../php/trabajador/editar_trabajador.php" method="POST">
        <h2>Editar trabajador</h2>

        <label for="id_editar_trabajador">ID trabajador</label>
        <select id="id_editar_trabajador" name="id_editar_trabajador" required>
            <?php
                echo "<option value='{$trabajador_fila['id_trabajador']}'>{$trabajador_fila['id_trabajador']}</option>";
            ?>
        </select>

        <label for="nombre_editar_trabajador">Nombre</label>
        <input id="nombre_editar_trabajador" value="<?php echo $trabajador_fila["nombre_trabajador"] ?>" name="nombre_editar_trabajador" type="text" placeholder="Nombre(s)" required>

        <label for="apellido_editar_trabajador">Apellido</label>
        <input id="apellido_editar_trabajador" value="<?php echo $trabajador_fila["apellido_trabajador"] ?>" name="apellido_editar_trabajador" type="text" placeholder="Apellidos" required>

        <label for="puesto_editar_trabajador">Puesto de trabajo</label>
        <select id="puesto_editar_trabajador" name="puesto_editar_trabajador" required>
            <?php iterate_select($puestos_trabajo,$trabajador_fila["puesto_trabajador"]) ?>
        </select>

        <label for="fecha_nacimiento_editar_trabajador" >Fecha de nacimiento</label>
        <input id="fecha_nacimiento_editar_trabajador" value="<?php echo $trabajador_fila["fecha_nacimiento_trabajador"] ?>" name="fecha_nacimiento_editar_trabajador" type="date" required>

        <label for="telefono_editar_trabajador" >Teléfono</label>
        <input id="telefono_editar_trabajador" value="<?php echo $trabajador_fila["telefono_trabajador"] ?>" name="telefono_editar_trabajador" type="tel" placeholder="Numero de teléfono" required>

        <label for="correo_editar_trabajador" >Correo Eletrónico</label>
        <input id="correo_editar_trabajador" value="<?php echo $trabajador_fila["correo_trabajador"] ?>" name="correo_editar_trabajador" type="email" placeholder="Correo electrónico" required>

        <label for="contrasena_editar_trabajador" >Contraseña</label>
        <input id="contrasena_editar_trabajador" value="<?php echo $trabajador_fila["contrasena_trabajador"] ?>" name="contrasena_editar_trabajador" type="password" placeholder="Contraseña" required>

        <input value="Editar" type="submit">
    </form>
</body>
</html>
