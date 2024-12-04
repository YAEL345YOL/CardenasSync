<?php
function connection(){
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "cardenassync";
    $con = new mysqli($server,$user,$password);
    
    $con->select_db($db);
    
    return $con;
}
function verify_worker(){
    session_start(); 
    if($_SESSION["tipo"]!="trabajador"){
        header("Location: ../views/index.php");
    }
}
function verify_input($variable){ 
    $variable = trim($variable); // Quitar los espacios en blanco al inicio y fin
    $variable = stripslashes($variable); // Eliminar las barras invertidas (\)
    $variable = htmlspecialchars($variable); // Evitar la ejecución de código HTML/JavaScript
    if(empty($variable)){ 
        return null;
    }
    return $variable;
}
?>