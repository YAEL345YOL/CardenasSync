<?php
include "../php/connection.php";
$con = connection();

$sql1 = "SELECT * FROM contenedor";
$sql2 = "SELECT * FROM cliente".(isset($_GET["id"]) ? " WHERE id_cliente = {$_GET["id"]}":"");

$contenedor = $con->query($sql1);
$cliente = $con->query($sql2)
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

        <h2>Contenedor/Cliente</h2>

        <form action="../php/contenedor_cliente/buscar_contenedor_cliente.php" method="POST">
            <input id="id_cliente_buscar_contenedor_cliente" name="id_cliente_buscar_contenedor_cliente" type="number" placeholder="ID cliente">

            <input value="Buscar" type="submit">
        </form>
    </header>
    <main class="layout--grid">
        <?php
            while($fila = $cliente->fetch_assoc()){
                $sql1 = "SELECT * FROM contenedor
                        JOIN contenedor_cliente
                        ON contenedor.id_contenedor = contenedor_cliente.id_contenedor
                        WHERE contenedor_cliente.id_cliente = {$fila["id_cliente"]}";
                $contenedor = $con->query($sql1);
                echo 
                "
                <section class='client-box'>
                    <div class='client-box__header'>
                        <i class='fa-solid fa-id-card-clip'></i>
                        <h3>{$fila["id_cliente"]}</h3>
                        <h3>{$fila["nombre_cliente"]} {$fila["apellido_cliente"]}</h3>
                        <a href='eliminar_contenedor_cliente.php?id={$fila["id_cliente"]}'><i class='fa-solid fa-trash'></i></a>
                        <a href='agregar_contenedor_cliente.php?id={$fila["id_cliente"]}'><i class='fa-solid fa-plus'></i></a>
                    </div>
                    <table class='table'>
                        <thead>
                            <th>ID</th>
                            <th>Tipo</th>
                            <th>Tamaño</th>
                            <th>Capacidad</th>
                            <th>ID_viaje</th>
                        </thead>
                        <tbody>
                ";
                    while($fila = $contenedor->fetch_assoc()){
                        echo 
                        "
                        <tr>
                            <td><a href='contenedor.php?id={$fila["id_contenedor"]}'>{$fila["id_contenedor"]}</a></td>
                            <td>{$fila["tipo_contenedor"]}</td>
                            <td>{$fila["tamano_contenedor"]}</td>
                            <td>{$fila["capacidad_contenedor"]}</td>
                            <td><a href='viaje.php?id={$fila["id_viaje"]}'>{$fila["id_viaje"]}</a></td>
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