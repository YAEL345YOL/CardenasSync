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
    <title>Agregar muelle</title>
</head>
<body class="body--form body--main">
    <form class="form form--size1" action="../php/muelle/agregar_muelle.php" method="POST">
        <h2>Agregar muelle</h2>

        <label for="nombre_agregar_muelle">Nombre</label>
        <input id="nombre_agregar_muelle" name="nombre_agregar_muelle" type="text" placeholder="Nombre del muelle" required>

        <label for="ubicacion_agregar_muelle">Ubicación</label>
        <input id="ubicacion_agregar_muelle" name="ubicacion_agregar_muelle" type="text" placeholder="Ubicación del muelle" required>

        <input value="Agregar" type="submit">
    </form>
</body>
</html>