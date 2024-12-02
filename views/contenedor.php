<?php 
    include "../php/connection.php";

    session_start();
    
    $con = connection();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contenedores</title>
</head>
<body>
    <?php if($_SESSION["tipo"]=="trabajador"): ?>
    <?php

    $sql1 = "SELECT * FROM viaje";
    $sql2 = "SELECT * FROM contenedor";

    $viaje = mysqli_query($con,$sql1);
    $contenedor = mysqli_query($con,$sql2);
    
    ?>
    <form action="../php/contenedor/agregar_contenedor.php" method="POST">
        <h2>Agregar contenedor</h2>

        <!-- Id viaje -->
        <label for="id_viaje_agregar_contenedor">ID viaje</label>
        <select id="id_viaje_agregar_contenedor" name="id_viaje_agregar_contenedor" required>
            <?php
                while($fila = mysqli_fetch_assoc($viaje)){
                    echo "<option value='{$fila['id_viaje']}'>{$fila['id_viaje']}</option>";
                }
            ?>
        </select>
        <br>

        <!-- Tipo de contenedor -->
        <label for="tipo_agregar_contenedor">Tipo de contenedor</label>
        <select id="tipo_agregar_contenedor" name="tipo_agregar_contenedor" required>
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
        <br>

        <!-- tamaño estandarizado -->
        <label for="tamano_agregar_contenedor">Tamaño</label>
        <select name="tamano_agregar_contenedor" id="tamano_agregar_contenedor" required>
            <option value="10ft">10 pies (10')</option>
            <option value="20ft">20 pies (20')</option>
            <option value="40ft">40 pies (40')</option>
            <option value="40ft HC">40 pies (40 HC')</option>
            <option value="45ft">45 pies (45')</option>
            <option value="53ft">53 pies (53')</option>
        </select>
        <br>

        <!-- Capacidad -->
        <label for="capacidad_agregar_contenedor">Capacidad</label>
        <input id="capacidad_agregar_contenedor" name="capacidad_agregar_contenedor" type="number" placeholder="Capacidad (kg)" required>
        <br>

        <!-- Boton de enviar -->
        <input type="submit">
    </form>
    <form action="../php/contenedor/editar_contenedor.php" method="POST">
        <h2>Editar contenedor</h2>

        <!-- Id contenedor -->
        <label for="id_editar_contenedor">ID contenedor</label>
        <select id="id_editar_contenedor" name="id_editar_contenedor" required>
            <?php
                while($fila = mysqli_fetch_assoc($contenedor)){
                    echo "<option value='{$fila['id_contenedor']}'>{$fila['id_contenedor']}</option>";
                }
            ?>
        </select>
        <br>

        <!-- Id viaje -->
        <label for="id_viaje_editar_contenedor">ID viaje</label>
        <select id="id_viaje_editar_contenedor" name="id_viaje_editar_contenedor" required>
            <?php
                mysqli_data_seek($viaje, 0);
                while($fila = mysqli_fetch_assoc($viaje)){
                    echo "<option value='{$fila['id_viaje']}'>{$fila['id_viaje']}</option>";
                }
            ?>
        </select>
        <br>

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
        <br>

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
        <br>

        <!-- Capacidad -->
        <label for="capacidad_editar_contenedor">Capacidad</label>
        <input id="capacidad_editar_contenedor" name="capacidad_editar_contenedor" type="number" placeholder="Capacidad (kg)" required>
        <br>

        <!-- Boton de enviar -->
        <input type="submit">
    </form>
    <form action="../php/contenedor/eliminar_contenedor.php" method="POST">
        <h2>Eliminar contenedor</h2>

        <!-- Id contenedor -->
        <label for="id_eliminar_contenedor">ID contenedor</label>
        <select id="id_eliminar_contenedor" name="id_eliminar_contenedor" required>
            <?php
                mysqli_data_seek($contenedor, 0);
                while($fila = mysqli_fetch_assoc($contenedor)){
                    echo "<option value='{$fila['id_contenedor']}'>{$fila['id_contenedor']}</option>";
                }
            ?>
        </select>
        <br>

        <!-- Boton de enviar -->
        <input type="submit">
    </form>
    <?php endif; ?>
    <?php if($_SESSION["tipo"]=="cliente"): ?>
    <h2>Mis contenedores</h2>
    <?php 

    $sql1 = "SELECT * FROM contenedor JOIN contenedor_cliente WHERE contenedor.id_contenedor = contenedor_cliente.id_contenedor AND contenedor_cliente.id_cliente = '{$_SESSION["id"]}'";

    $contenedor = mysqli_query($con,$sql1);

    ?>
    <?php endif; ?>
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
                mysqli_data_seek($contenedor, 0);
                while($fila = mysqli_fetch_assoc($contenedor)){
                    echo "
                    <tr>
                        <td>{$fila["id_contenedor"]}</td>
                        <td>{$fila["tipo_contenedor"]}</td>
                        <td>{$fila["tamano_contenedor"]}</td>
                        <td>{$fila["capacidad_contenedor"]}</td>
                        <td>{$fila["id_viaje"]}</td>
                    </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
</body>
</html>