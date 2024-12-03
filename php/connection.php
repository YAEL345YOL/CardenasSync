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
?>