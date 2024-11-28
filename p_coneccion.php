<?php

function coneccion(){
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $base_de_datos = "cardenassync";

    $con = mysqli_connect($servidor,$usuario,$contrasena);
    mysqli_select_db($con,$base_de_datos);

    return $con;
}

?>