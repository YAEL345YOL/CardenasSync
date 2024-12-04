<?php
include "../php/connection.php";

verify_worker();

session_start();
    
$con = connection();
$sql1 = "SELECT * FROM muelle".(isset($_GET["id"]) ? " WHERE id_muelle = {$_GET["id"]}":"");

$muelle = $con->query($sql1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>muelle</title>
</head>
<body>
    <form action="../php/muelle/agregar_muelle.php" method="POST">
        <h2>Agregar muelle</h2>

        <!-- Nombre -->
        <label for="nombre_agregar_muelle">Nombre</label>
        <input id="nombre_agregar_muelle" name="nombre_agregar_muelle" type="text" placeholder="Nombre del muelle" required>
        <br>

        <!-- Ubicacion -->
        <label for="ubicacion_agregar_muelle">Ubicación</label>
        <input id="ubicacion_agregar_muelle" name="ubicacion_agregar_muelle" type="text" placeholder="Ubicación del muelle" required>
        <br>

        <!-- Boton de enviar -->
        <input type="submit">
    </form>
    <form action="../php/muelle/editar_muelle.php" method="POST">
        <h2>Editar muelle</h2>

        <!-- Muelle  -->
        <label for="id_editar_muelle">ID muelle</label>        
        <select name="id_editar_muelle" id="id_editar_muelle" required>
            <?php
                $muelle->data_seek(0);
                while($fila = $muelle->fetch_assoc()){
                    echo "<option value='{$fila['id_muelle']}'>{$fila['id_muelle']}</option>";
                }
            ?>
        </select>
        <br>

        <!-- Nombre -->
        <label for="nombre_editar_muelle">Nombre</label>
        <input id="nombre_editar_muelle" name="nombre_editar_muelle" type="text" placeholder="Nombre del muelle" required>
        <br>

        <!-- Ubicacion -->
        <label for="ubicacion_editar_muelle">Ubicación</label>
        <input id="ubicacion_editar_muelle" name="ubicacion_editar_muelle" type="text" placeholder="Ubicación del muelle" required>
        <br>

        <!-- Boton de enviar -->
        <input type="submit">
    </form>
    <form action="../php/muelle/eliminar_muelle.php" method="POST">
        <h2>Eliminar muelle</h2>

        <!-- Id contenedor -->
        <label for="id_eliminar_muelle">ID muelle</label>
        <select id="id_eliminar_muelle" name="id_eliminar_muelle" required>
            <?php
                $muelle->data_seek(0);
                while($fila = $muelle->fetch_assoc()){
                    echo "<option value='{$fila['id_muelle']}'>{$fila['id_muelle']}</option>";
                }
            ?>
        </select>
        <br>

        <!-- Boton de enviar -->
        <input type="submit">
    </form>
    <form action="../php/muelle/buscar_muelle.php" method="POST">

        <input id="id_buscar_muelle" name="id_buscar_muelle" type="text" placeholder="Ingrese ID muelle">

        <!-- Boton de enviar -->
        <input type="submit">
    </form>
    <table>
        <thead>
            <th>id</th>
            <th>nombre</th>
            <th>ubicacion</th>
        </thead>
        <tbody>
        <?php
            $muelle->data_seek(0);
            while($fila = $muelle->fetch_assoc()){
                echo "
                <tr>
                    <td>{$fila["id_muelle"]}</td>
                    <td>{$fila["nombre_muelle"]}</td>
                    <td>{$fila["ubicacion_muelle"]}</td>
                </tr>
                ";
            }
        ?>
        </tbody>
    </table>
</body>
</html>
