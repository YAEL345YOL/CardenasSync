<?php
function connection(){
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "cardenassync";
    $con = mysqli_connect($server,$user,$password);
    
    mysqli_select_db($con,$db);
    
    return $con;
}
function verify_worker(){
    session_start();
    if(!$_SESSION["trabajador"]){
        header("Location: inicio.php");
    }
}
?>