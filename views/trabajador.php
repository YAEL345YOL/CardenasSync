<?php
include "../php/connection.php";
$con = connection();

$sql1 = "SELECT * FROM trabajador".(isset($_GET["id"]) ? " WHERE id_trabajador={$_GET["id"]}":"");

$trabajador = $con->query($sql1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a7358fff6e.js" crossorigin="anonymous"></script>
    <title>Trabajador</title>
</head>
<body>
    <header class="header header--text-white header--color-blue header--title-blue">
        <a href="index.php"><i class="fa-solid fa-house"></i></a>
        <h2>Trabajadores</h2>
        <ul>
            <li><a href="agregar_trabajador.php">Agregar</a></li>
            <li><a href="eliminar_trabajador.php">Eliminar</a></li>
        </ul>
        <form action="../php/trabajador/buscar_trabajador.php" method="POST">
            <input id="id_buscar_trabajador" name="id_buscar_trabajador" type="number" placeholder="Ingrese ID trabajador">
    
            <input value="Buscar" type="submit">
        </form>
    </header>
    <table class="table">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de nacimiento</th>
            <th>Correo</th>
        </thead>
        <tbody>
        <?php
            while($fila = $trabajador->fetch_assoc()){
                echo "
                <tr>
                    <td>{$fila["id_trabajador"]}</td>
                    <td>{$fila["nombre_trabajador"]}</td>
                    <td>{$fila["apellido_trabajador"]}</td>
                    <td>{$fila["fecha_nacimiento_trabajador"]}</td>
                    <td>{$fila["correo_trabajador"]}</td>
                    <td><a href='eliminar_trabajador.php?id={$fila["id_trabajador"]}'><i class='fa-solid fa-trash'></i></a></td>
                </tr>
                ";
            }
        ?>
        </tbody>
    </table>
</body>
</html>
