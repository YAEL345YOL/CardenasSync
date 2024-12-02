<?php
    include "../php/connection.php";

    verify_worker();

    session_start();

    $con = connection();
    $sql1 = "SELECT * FROM barco";

    $resultado1 = mysqli_query($con,$sql1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar barco</title>
</head>
<body>
    <form action="../php/agregar_barco.php" method="POST">
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
        <input id="nacionalidad_agregar_barco" name="nacionalidad_agregar_barco" type="text" placeholder="Nacionalidad del barco" required>
        <br>

        <!-- Boton de enviar -->
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
                while($fila = mysqli_fetch_assoc($resultado1)){
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
