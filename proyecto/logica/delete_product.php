<?php
require "conexion.php";
mysqli_set_charset($conexion, 'utf8');

$idProducto = $_POST['id_producto'];

// Realizar la eliminación
$consulta = "DELETE FROM producto WHERE id_producto = '$idProducto'";

if (mysqli_query($conexion, $consulta)) {
    echo "<div>
            El producto con ID $idProducto ha sido eliminado con éxito.
          </div>";
} else {
    echo "<div>
            Error: No se pudo eliminar el producto. " . mysqli_error($conexion) . "
          </div>";
}

mysqli_close($conexion);

// Redireccionar después de mostrar el mensaje
header('Refresh: 1.5; URL=../mostrar_delete.php');
?>
