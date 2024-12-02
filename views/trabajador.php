<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar trabajador</title>
</head>
<body>
    <form action="../php/agregar_trabajador.php" method="POST">
        <h2>Agregar trabajador</h2>

        <!-- Nombre(s) -->
        <label for="nombre_agregar_trabajador">Nombre</label>
        <input id="nombre_agregar_trabajador" name="nombre_agregar_trabajador" type="text" placeholder="Nombre(s) del trabajador" required>
        <br>

        <!-- Apellido(s) -->
        <label for="apellido_agregar_trabajador">Apellido</label>
        <input id="apellido_agregar_trabajador" name="apellido_agregar_trabajador" type="text" placeholder="Apellidos del trabajador" required>
        <br>

        <!-- Puesto de trabajo -->
        <label for="puesto_agregar_trabajador">Puesto de trabajo</label>
        <select id="puesto_agregar_trabajador" name="puesto_agregar_trabajador" required>
            <option value="Capitan">Capitan</option>
            <option value="Oficial de carga">Oficial de carga</option>
            <option value="Contramaestre">Contramaestre</option>
            <option value="Inspector de carga">Inspector de carga</option>
            <option value="Supervisor de logistica">Supervisor de logistica</option>
        </select>
        <br>

        <!-- Fecha de nacimiento -->
        <label for="fecha_nacimiento_agregar_trabajador" >Fecha de nacimiento</label>
        <input id="fecha_nacimiento_agregar_trabajador" name="fecha_nacimiento_agregar_trabajador" type="date" required>
        <br>

        <!-- Telefono -->
        <label for="telefono_agregar_trabajador" >Teléfono</label>
        <input id="telefono_agregar_trabajador" name="telefono_agregar_trabajador" type="tel" placeholder="Numero de teléfono" required>
        <br>

        <!-- Correo eletronico -->
        <label for="correo_agregar_trabajador" >Correo Eletrónico</label>
        <input id="correo_agregar_trabajador" name="correo_agregar_trabajador" type="email" placeholder="Correo electrónico" required>
        <br>

        <!-- Boton de enviar -->
        <input type="submit">
    </form>
</body>
</html>
