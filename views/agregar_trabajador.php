<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a7358fff6e.js" crossorigin="anonymous"></script>
    <title>Agregar trabajador</title>
</head>
<body class="body--form body--main">
    <form class="form form--size3" action="../php/trabajador/agregar_trabajador.php" method="POST">
        <h2>Agregar trabajador</h2>

        <label for="nombre_agregar_trabajador">Nombre</label>
        <input id="nombre_agregar_trabajador" name="nombre_agregar_trabajador" type="text" placeholder="Nombre(s) del trabajador" required>

        <label for="apellido_agregar_trabajador">Apellido</label>
        <input id="apellido_agregar_trabajador" name="apellido_agregar_trabajador" type="text" placeholder="Apellidos del trabajador" required>

        <label for="puesto_agregar_trabajador">Puesto de trabajo</label>
        <select id="puesto_agregar_trabajador" name="puesto_agregar_trabajador" required>
            <option value="Capitan">Capitan</option>
            <option value="Oficial de carga">Oficial de carga</option>
            <option value="Contramaestre">Contramaestre</option>
            <option value="Inspector de carga">Inspector de carga</option>
            <option value="Supervisor de logistica">Supervisor de logistica</option>
        </select>

        <label for="fecha_nacimiento_agregar_trabajador" >Fecha de nacimiento</label>
        <input id="fecha_nacimiento_agregar_trabajador" name="fecha_nacimiento_agregar_trabajador" type="date" required>

        <label for="telefono_agregar_trabajador" >Teléfono</label>
        <input id="telefono_agregar_trabajador" name="telefono_agregar_trabajador" type="tel" placeholder="Numero de teléfono" required>

        <label for="correo_agregar_trabajador" >Correo Eletrónico</label>
        <input id="correo_agregar_trabajador" name="correo_agregar_trabajador" type="email" placeholder="Correo electrónico" required>

        <input value="Agregar" type="submit">
    </form>
</body>
</html>
