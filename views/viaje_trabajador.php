<?php
include "../php/connection.php";
$con = connection();

$sql1 = "SELECT * FROM viaje".(isset($_GET["id"]) ? " WHERE id_viaje = {$_GET["id"]}":"");

$viaje = $con->query($sql1);
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
    <title>Contenedor/Cliente</title>
</head>
<body>
    <header class="header header--text-white header--color-blue header--title-blue">
        <a href="index.php"><i class="fa-solid fa-house"></i></a>

        <h2>Viaje/Trabajador</h2>

        <form action="../php/viaje_trabajador/buscar_viaje_trabajador.php" method="POST">
            <input id="id_viaje_buscar_viaje_trabajador" name="id_viaje_buscar_viaje_trabajador" type="number" placeholder="ID viaje">

            <input value="Buscar" type="submit">
        </form>
        
    </header>
    <main class="layout--grid">
        <?php
            while($fila = $viaje->fetch_assoc()){
                $sql1 = "SELECT * FROM trabajador
                        JOIN viaje_trabajador
                        ON viaje_trabajador.id_trabajador = trabajador.id_trabajador
                        WHERE viaje_trabajador.id_viaje = {$fila["id_viaje"]}";
                $trabajador = $con->query($sql1);
                echo 
                "
                <section class='client-box'>
                    <div class='client-box__header'>
                        <i class='fa-solid fa-id-card-clip'></i>
                        <h3>{$fila["id_viaje"]}</h3>
                        <h3>Viaje</h3>
                        <a href='eliminar_viaje_trabajador.php?id={$fila["id_viaje"]}'><i class='fa-solid fa-trash'></i></a>
                        <a href='agregar_viaje_trabajador.php?id={$fila["id_viaje"]}'><i class='fa-solid fa-plus'></i></a>
                    </div>
                    <table class='table'>
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Puesto</th>
                        </thead>
                        <tbody>
                ";
                    while($fila = $trabajador->fetch_assoc()){
                        echo 
                        "
                        <tr>
                            <td><a href='trabajador.php?id={$fila["id_trabajador"]}'>{$fila["id_trabajador"]}</a></td>
                            <td>{$fila["nombre_trabajador"]}</td>
                            <td>{$fila["apellido_trabajador"]}</td>
                            <td>{$fila["puesto_trabajador"]}</td>
                        </tr>
                        ";
                    }
                echo 
                "   
                        </tbody>
                    </table>
                </section>
                ";
            }
        ?>   
    </main>  
</body>
</html>