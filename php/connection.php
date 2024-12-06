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
function verify_input($variable){ 
    $variable = trim($variable); // Quitar los espacios en blanco al inicio y fin
    $variable = stripslashes($variable); // Eliminar las barras invertidas (\)
    $variable = htmlspecialchars($variable); // Evitar la ejecución de código HTML/JavaScript
    if(empty($variable)){ 
        return null;
    }
    return $variable;
}
function iterate_select($arr,$target=null){
    foreach($arr as $item){
        $selected = ($item == $target ? "selected":"");
        $out = "<option value='{$item}' {$selected}>{$item}</option>";
        echo $out;
    }
}

/* Varibles */

$tipos_barco = [
    'Portacontenedores',
    'Granelero',
    'Petrolero',
    'Gasero',
    'Quimiquero'
];

$paises = [
    'México',
    'Estados Unidos',
    'China',
    'Japón',
    'Corea del Sur',
    'Panamá',
    'Singapur',
    'Hong Kong',
    'Bahamas',
    'Islas Marshall',
    'Liberia',
    'Malta',
    'República Dominicana',
    'Italia'
];

?>