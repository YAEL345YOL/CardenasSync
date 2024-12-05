<?php 
include "../php/connection.php";

session_start();
    
$con = connection();

if($_SESSION["tipo"]=="trabajador"){
    $sql1 = "SELECT * FROM contenedor".(isset($_GET["id"]) ? " WHERE id_contenedor = '{$_GET["id"]}'" : "");
    $sql2 = "SELECT * FROM viaje";

    $contenedor = $con->query($sql1);
    $viaje = $con->query($sql2);
}
else if($_SESSION["tipo"]=="cliente"){
    $sql1 = "SELECT * FROM contenedor JOIN contenedor_cliente WHERE contenedor.id_contenedor = contenedor_cliente.id_contenedor AND contenedor_cliente.id_cliente = {$_SESSION["id"]}".(isset($_GET["id"]) ? " AND contenedor.id_contenedor = {$_GET["id"]}" : "");

    $contenedor = $con->query($sql1);
}
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
    <title>contenedor</title>
</head>
<body class="body--layout">
    <?php if($_SESSION["tipo"]=="trabajador"): ?>
        <form class="form form--size1" action="../php/contenedor/agregar_contenedor.php" method="POST">
            <h2>Agregar contenedor</h2>
            <label for="id_viaje_agregar_contenedor">ID viaje</label>
            <select class="form__input"  id="id_viaje_agregar_contenedor" name="id_viaje_agregar_contenedor" required>
                <?php
                    while($fila = $viaje->fetch_assoc()){
                        echo "<option value='{$fila['id_viaje']}'>{$fila['id_viaje']}</option>";
                    }
                ?>
            </select>
                
            <label for="tipo_agregar_contenedor">Tipo de contenedor</label>
            <select class="form__input"  id="tipo_agregar_contenedor" name="tipo_agregar_contenedor" required>
                <option value="Seco">Seco</option>
                <option value="Refrigerado">Refrigerado</option>
                <option value="Techo Abierto">Techo Abierto</option>
                <option value="Plataforma">Plataforma</option>
                <option value="Lado abierto">Lado abierto</option>
                <option value="Gran altura">Gran altura</option>
                <option value="Tanque">Tanque</option>
                <option value="Ventilacion">Ventilación</option>
                <option value="Carga a granel">Carga a granel</option>
                <option value="Aislante">Aislante</option>
                <option value="Carga no paletizada">Carga no paletizada</option>
            </select>
                
            <label for="tamano_agregar_contenedor">Tamaño</label>
            <select class="form__input" name="tamano_agregar_contenedor" id="tamano_agregar_contenedor" required>
                <option value="10ft">10 pies (10')</option>
                <option value="20ft">20 pies (20')</option>
                <option value="40ft">40 pies (40')</option>
                <option value="40ft HC">40 pies (40 HC')</option>
                <option value="45ft">45 pies (45')</option>
                <option value="53ft">53 pies (53')</option>
            </select>
                
            <label for="capacidad_agregar_contenedor">Capacidad</label>
            <input class="form__input" id="capacidad_agregar_contenedor" name="capacidad_agregar_contenedor" type="number" placeholder="Capacidad (kg)" required>

            <input class="form__button" type="submit">
        </form>
        <form class="form form--size1" action="../php/contenedor/editar_contenedor.php" method="POST">
            <h2>Editar contenedor</h2>
            <!-- Id contenedor -->
            <label for="id_editar_contenedor">ID contenedor</label>
            <select id="id_editar_contenedor" name="id_editar_contenedor" required>
                <?php
                    while($fila = $contenedor->fetch_assoc()){
                        echo "<option value='{$fila['id_contenedor']}'>{$fila['id_contenedor']}</option>";
                    }
                ?>
            </select>
                
            <!-- Id viaje -->
            <label for="id_viaje_editar_contenedor">ID viaje</label>
            <select id="id_viaje_editar_contenedor" name="id_viaje_editar_contenedor" required>
                <?php
                    $viaje->data_seek(0);
                    while($fila = $viaje->fetch_assoc()){
                        echo "<option value='{$fila['id_viaje']}'>{$fila['id_viaje']}</option>";
                    }
                ?>
            </select>
                
            <!-- Tipo de contenedor -->
            <label for="tipo_editar_contenedor">Tipo de contenedor</label>
            <select id="tipo_editar_contenedor" name="tipo_editar_contenedor" required>
                <option value="Seco">Seco</option>
                <option value="Refrigerado">Refrigerado</option>
                <option value="Techo Abierto">Techo Abierto</option>
                <option value="Plataforma">Plataforma</option>
                <option value="Lado abierto">Lado abierto</option>
                <option value="Gran altura">Gran altura</option>
                <option value="Tanque">Tanque</option>
                <option value="Ventilacion">Ventilación</option>
                <option value="Carga a granel">Carga a granel</option>
                <option value="Aislante">Aislante</option>
                <option value="Carga no paletizada">Carga no paletizada</option>
            </select>
                
            <!-- tamaño estandarizado -->
            <label for="tamano_editar_contenedor">Tamaño</label>
            <select name="tamano_editar_contenedor" id="tamano_editar_contenedor" required>
                <option value="10ft">10 pies (10')</option>
                <option value="20ft">20 pies (20')</option>
                <option value="40ft">40 pies (40')</option>
                <option value="40ft HC">40 pies (40 HC')</option>
                <option value="45ft">45 pies (45')</option>
                <option value="53ft">53 pies (53')</option>
            </select>
                
            <!-- Capacidad -->
            <label for="capacidad_editar_contenedor">Capacidad</label>
            <input id="capacidad_editar_contenedor" name="capacidad_editar_contenedor" type="number" placeholder="Capacidad (kg)" required>
            <!-- Boton de enviar -->
            <input class="form__button" type="submit">
        </form>
        <form class="form form--size1" action="../php/contenedor/eliminar_contenedor.php" method="POST">
            <h2>Eliminar contenedor</h2>
            <label for="id_eliminar_contenedor">ID contenedor</label>
            <select id="id_eliminar_contenedor" name="id_eliminar_contenedor" required>
                <?php
                    $contenedor->data_seek(0);
                    while($fila = $contenedor->fetch_assoc()){
                        echo "<option value='{$fila['id_contenedor']}'>{$fila['id_contenedor']}</option>";
                    }
                ?>
            </select>
            <input type="submit">
        </form>
    <?php endif; ?>
    <form action="../php/contenedor/buscar_contenedor.php" method="POST">

        <!-- Buscar contenedor -->
        <input id="id_buscar_contenedor" name="id_buscar_contenedor" type="number" placeholder="Ingrese id contenedor">

        <!-- Boton enviar -->
        <input type="submit">
    </form>
    <table>
        <thead>
            <th>id</th>
            <th>tipo</th>
            <th>tamano</th>
            <th>capacidad</th>
            <th>id_viaje</th>
        </thead>
        <tbody>
            <?php
                $contenedor->data_seek(0);
                while($fila = $contenedor->fetch_assoc()){
                    echo "
                    <tr>
                        <td>{$fila["id_contenedor"]}</td>
                        <td>{$fila["tipo_contenedor"]}</td>
                        <td>{$fila["tamano_contenedor"]}</td>
                        <td>{$fila["capacidad_contenedor"]}</td>
                        <td><a href='viaje.php?id={$fila["id_viaje"]}'>{$fila["id_viaje"]}</a></td>
                    </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
</body>
</html>