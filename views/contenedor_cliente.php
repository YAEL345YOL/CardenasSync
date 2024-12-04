<?php
include "../php/connection.php";
$con = connection();

verify_worker();

$sql1 = "SELECT * FROM contenedor";
$sql2 = "SELECT * FROM cliente";

$contenedor = $con->query($sql1);
$cliente = $con->query($sql2)
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contenedor & cliente</title>
</head>
<body>
    <form action="../php/contenedor_cliente/agregar_contenedor_cliente.php" method="POST">
        <h2>Agregar contenedor_cliente</h2>

        <!-- id contenedor -->
        <label for="id_contenedor_agregar_contenedor_cliente">ID contenedor</label>
        <select name="id_contenedor_agregar_contenedor_cliente" id="id_contenedor_agregar_contenedor_cliente" required>
            <?php
                while($fila = $contenedor->fetch_assoc()){
                    echo "<option value='{$fila['id_contenedor']}'>{$fila['id_contenedor']}</option>";
                }
            ?>
        </select>
        <br>

        <!-- id cliente -->
        <label for="id_cliente_agregar_contenedor_cliente">ID cliente</label>
        <select name="id_cliente_agregar_contenedor_cliente" id="id_cliente_agregar_contenedor_cliente" required>
            <?php
                while($fila = $cliente->fetch_assoc()){
                    echo "<option value='{$fila['id_cliente']}'>{$fila['id_cliente']}</option>";
                }
            ?>
        </select>
        <br>

        <!-- boton enviar -->
        <input type="submit">
    </form>
    <form action="../php/contenedor_cliente/editar_contenedor_cliente.php" method="POST">
        
    </form>
    <form action="../php/contenedor_cliente/eliminar_contenedor_cliente.php" method="POST">
        
    </form>
    <form action="../php/contenedor_cliente/buscar_contenedor_cliente.php" method="POST">

    </form>
    <?php
    $cliente->data_seek(0);
        while($fila = $cliente->fetch_assoc()){
            $sql1 = "SELECT * FROM contenedor JOIN contenedor_cliente ON contenedor.id_contenedor = contenedor_cliente.id_contenedor WHERE contenedor_cliente.id_cliente = {$fila["id_cliente"]}";
            $contenedor = $con->query($sql1);
            echo "
            <div>
                <h3>{$fila["nombre_cliente"]} ID:{$fila["id_cliente"]}</h3>
                <table>
                    <thead>
                        <th>id</th>
                        <th>tipo</th>
                        <th>tamano</th>
                        <th>capacidad</th>
                        <th>id_viaje</th>
                    </thead>
                    <tbody>";
                    $contenedor->data_seek(0);
                    while($fila = $contenedor->fetch_assoc()){
                        echo "
                            <tr>
                                <td>{$fila["id_contenedor"]}</td>
                                <td>{$fila["tipo_contenedor"]}</td>
                                <td>{$fila["tamano_contenedor"]}</td>
                                <td>{$fila["capacidad_contenedor"]}</td>
                                <td><a href='viaje.php?id={$fila["id_viaje"]}'>{$fila["id_viaje"]}</a></td>
                            </tr>";
                    }
              echo "</tbody>
                </table>
            </div>";
        }
    ?>     
</body>
</html>