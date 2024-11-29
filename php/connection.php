<?php
function connection(){
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "cardenassync";
    $con = mysqli_connect($server,$user,$password);
    
    mysqli_select_db($con,$db);
    
    return $con;
    // * Terminado
}
?>