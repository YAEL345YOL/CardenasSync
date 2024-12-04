<?php
include "../php/connection.php";

verify_worker();

session_start();

$con = connection();
$sql1 = "SELECT * FROM trabajador";

$trabajador = $con->query($sql1);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trabajador</title>
</head>
<body>
    <form action="../php/trabajador/agregar_trabajador.php" method="POST">
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
    <form action="../php/trabajador/editar_trabajador.php" method="POST">
        <h2>Editar trabajador</h2>

        <!-- id trabajador -->
        <label for="id_editar_trabajador">ID trabajador</label>
        <select id="id_editar_trabajador" name="id_editar_trabajador" required>
            <?php
                while($fila = $trabajador->fetch_assoc()){
                    echo "<option value='{$fila['id_trabajador']}'>{$fila['id_trabajador']}</option>";
                }
            ?>
        </select>
        <br>

        <!-- Nombre(s) -->
        <label for="nombre_editar_trabajador">Nombre</label>
        <input id="nombre_editar_trabajador" name="nombre_editar_trabajador" type="text" placeholder="Nombre(s) del trabajador" required>
        <br>

        <!-- Apellido(s) -->
        <label for="apellido_editar_trabajador">Apellido</label>
        <input id="apellido_editar_trabajador" name="apellido_editar_trabajador" type="text" placeholder="Apellidos del trabajador" required>
        <br>

        <!-- Puesto de trabajo -->
        <label for="puesto_editar_trabajador">Puesto de trabajo</label>
        <select id="puesto_editar_trabajador" name="puesto_editar_trabajador" required>
            <option value="Capitan">Capitan</option>
            <option value="Oficial de carga">Oficial de carga</option>
            <option value="Contramaestre">Contramaestre</option>
            <option value="Inspector de carga">Inspector de carga</option>
            <option value="Supervisor de logistica">Supervisor de logistica</option>
        </select>
        <br>

        <!-- Fecha de nacimiento -->
        <label for="fecha_nacimiento_editar_trabajador">Fecha de nacimiento</label>
        <input id="fecha_nacimiento_editar_trabajador" name="fecha_nacimiento_editar_trabajador" type="date" required>
        <br>

        <!-- Telefono -->
        <label for="telefono_editar_trabajador">Teléfono</label>
        <input id="telefono_editar_trabajador" name="telefono_editar_trabajador" type="tel" placeholder="Numero de teléfono" required>
        <br>

        <!-- Correo eletronico -->
        <label for="correo_editar_trabajador">Correo Eletrónico</label>
        <input id="correo_editar_trabajador" name="correo_editar_trabajador" type="email" placeholder="Correo electrónico" required>
        <br>

        <!-- Contrasena -->
        <label for="contrasena_editar_trabajador">Contraseña</label>
        <input id="contrasena_editar_trabajador" name="contrasena_editar_trabajador" type="password" placeholder="contraseña" required>
        <br>

        <!-- Boton de enviar -->
        <input type="submit">
    </form>
    <table>
        <thead>
            <th>id</th>
            <th>nombre</th>
            <th>apellido</th>
            <th>fecha de nacimiento</th>
            <th>correo</th>
            <th>contrasena</th>
        </thead>
        <tbody>
        <?php
            $trabajador->data_seek(0);
            while($fila = $trabajador->fetch_assoc()){
                echo "
                <tr>
                    <td>{$fila["id_trabajador"]}</td>
                    <td>{$fila["nombre_trabajador"]}</td>
                    <td>{$fila["apellido_trabajador"]}</td>
                    <td>{$fila["fecha_nacimiento_trabajador"]}</td>
                    <td>{$fila["correo_trabajador"]}</td>
                    <td>{$fila["contrasena_trabajador"]}</td>
                </tr>
                ";
            }
        ?>
        </tbody>
    </table>
</body>
</html>
