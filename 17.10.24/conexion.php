<?php
    $host_db = "127.0.0.1:3306";
    $user_name = "root";
    $user_pass = "Blc141204.";
    $db_name = "progra_web";

    $conexion = new mysqli($host_db, $user_name, $user_pass, $db_name);

    if($conexion->connect_error){
        echo"<h1>Error de conexion</h1>";
    }else{
        echo"<h1>Conexion realizada</h1>";
    }
?>