<?php
$host_db = "127.0.0.1:3306";
$user_name = "root";
$user_pass = "B3AR1419";
$db_name = "lunaticos_db";

$conexion = new mysqli($host_db, $user_name, $user_pass, $db_name);

if ($conexion->connect_error) {
  echo "<h1>
                No se pudo establecer la conexión con la base de datos.
              </h1>";
  die();
}
?>