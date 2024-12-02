<?php
    include "../php/connection.php";

    verify_worker();

    session_start();

    $con = connection();
    $sql = "SELECT * FROM contenedor";

    $resultado = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rastrear contenedor</title>
</head>
<body>
    <form action="../php/rastrear_contenedor.php" method="POST">
        <h2>Rastrear contenedor</h2>

        <!-- Rastrear articulo por id -->
        <label for="id_rastrear_contenedor">ID contenedor</label>
        <select name="id_rastrear_contenedor" id="id_rastrear_contenedor" required>
            <?php
                while($fila = mysqli_fetch_assoc($resultado)){
                    echo "<option value='{$fila['id_contenedor']}'>{$fila['id_contenedor']}</option>";
                }
            ?>
        </select>
        <br>

        <!-- Boton de enviar -->
        <input type="submit">
    </form>
</body>
</html>
