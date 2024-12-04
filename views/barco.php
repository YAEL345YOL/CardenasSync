<?php
include "../php/connection.php";

verify_worker();

session_start();

$con = connection();

$sql1 = "SELECT * FROM barco".(isset($_GET["id"]) ? " WHERE id_barco = '{$_GET["id"]}'" : "");

$barco = $con->query($sql1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>barco</title>
</head>
<body>
    <form action="../php/barco/agregar_barco.php" method="POST">
        <h2>Agregar barco</h2>

        <!-- Nombre del Barco -->
        <label for="nombre_agregar_barco">Nombre del barco</label>
        <input id="nombre_agregar_barco" name="nombre_agregar_barco" type="text" placeholder="Nombre del barco" required>
        <br>

        <!-- Tipo de Barco -->
        <label for="tipo_agregar_barco">Tipo de barco</label>
        <select id="tipo_agregar_barco" name="tipo_agregar_barco" required>
            <option value="Portacontenedores">Portacontenedores</option>
            <option value="Granelero">Granelero</option>
            <option value="Petrolero">Petrolero</option>
            <option value="Gasero">Gasero</option>
            <option value="Quimiquero">Quimiquero</option>
        </select>
        <br>

        <!-- Nacionalidad -->
        <label for="nacionalidad_agregar_barco">Nacionalidad</label>
        <input id="nacionalidad_agregar_barco" name="nacionalidad_agregar_barco" list="nacionalidad_agregar" placeholder="Nacionalidad" required>
        <datalist id="nacionalidad_agregar">
            <option value="México">
            <option value="Estados Unidos">
            <option value="China">
            <option value="Japón">
            <option value="Corea del Sur">
            <option value="Panamá">
            <option value="Singapur">
            <option value="Hong Kong">
            <option value="Bahamas">
            <option value="Islas Marshall">
            <option value="Liberia">
            <option value="Malta">
            <option value="República Dominicana">
            <option value="Italia">
        </datalist>
        <br>

        <!-- Boton de enviar -->
        <input type="submit">
    </form>
    <form action="../php/barco/editar_barco.php" method="POST">
        <h2>Editar barco</h2>

        <!-- Id_barco -->
        <label for="id_editar_barco">ID barco</label>
        <select name="id_editar_barco" id="id_editar_barco" required>
            <?php
                while ($fila = $barco->fetch_assoc()) {
                    echo "<option value='{$fila['id_barco']}'>{$fila['id_barco']}</option>";
                }
            ?>
        </select>
        <br>

        <!-- Nombre del Barco -->
        <label for="nombre_editar_barco">Nombre del barco</label>
        <input id="nombre_editar_barco" name="nombre_editar_barco" type="text" placeholder="Nombre del barco" required>
        <br>

        <!-- Tipo de Barco -->
        <label for="tipo_editar_barco">Tipo de barco</label>
        <select id="tipo_editar_barco" name="tipo_editar_barco" required>
            <option value="Portacontenedores">Portacontenedores</option>
            <option value="Granelero">Granelero</option>
            <option value="Petrolero">Petrolero</option>
            <option value="Gasero">Gasero</option>
            <option value="Quimiquero">Quimiquero</option>
        </select>
        <br>

        <!-- Nacionalidad -->
        <label for="nacionalidad_editar_barco">Nacionalidad</label>
        <input id="nacionalidad_editar_barco" name="nacionalidad_editar_barco" list="nacionalidad_editar" placeholder="Nacionalidad" required>
        <datalist id="nacionalidad_editar">
            <option value="México">
            <option value="Estados Unidos">
            <option value="China">
            <option value="Japón">
            <option value="Corea del Sur">
            <option value="Panamá">
            <option value="Singapur">
            <option value="Hong Kong">
            <option value="Bahamas">
            <option value="Islas Marshall">
            <option value="Liberia">
            <option value="Malta">
            <option value="República Dominicana">
            <option value="Italia">
        </datalist>
        <br>

        <!-- Boton de enviar -->
        <input type="submit">
    </form>
    <form action="../php/barco/eliminar_barco.php" method="POST">
        <h2>Eliminar barco</h2>

        <!-- Id_barco -->
        <label for="id_eliminar_barco">ID barco</label>
        <select name="id_eliminar_barco" id="id_eliminar_barco" required>
            <?php
                $barco->data_seek(0);
                while ($fila = $barco->fetch_assoc()) {
                    echo "<option value='{$fila['id_barco']}'>{$fila['id_barco']}</option>";
                }
            ?>
        </select>
        <br>

        <!-- Boton de enviar -->
        <input type="submit">
    </form>
    <form action="../php/barco/buscar_barco.php" method="POST">
        <!-- Buscar contenedor -->
        <input id="id_buscar_barco" name="id_buscar_barco" type="number" placeholder="Ingrese id barco">

        <!-- Boton enviar -->
        <input type="submit">
    </form>
    <table>
        <thead>
            <th>id</th>
            <th>nombre</th>
            <th>tipo</th>
            <th>nacionalidad</th>
        </thead>
        <tbody>
            <?php
                $barco->data_seek(0);
                while ($fila = $barco->fetch_assoc()) {
                    echo "
                    <tr>
                        <td>{$fila["id_barco"]}</td>
                        <td>{$fila["nombre_barco"]}</td>
                        <td>{$fila["tipo_barco"]}</td>
                        <td>{$fila["nacionalidad_barco"]}</td>
                    </tr>
                    ";
                }
            ?>
        </tbody>
    </table>
</body>
</html>