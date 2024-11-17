<?php
session_start();
$usuario = $_SESSION['username'];

if (!isset($usuario)) {
    header("location: ./index.php");
    exit();
} else {
    echo "<h1>Bienvenido, $usuario</h1>";
    echo "<a href='./logica/exit.php'>Cerrar sesión</a>";

    require "./logica/conexion.php";
    mysqli_set_charset($conexion, 'utf8');

    // Consultar productos
    $consulta_sql = "SELECT * FROM producto";
    $resultado = $conexion->query($consulta_sql);
    $count = mysqli_num_rows($resultado);

    echo "<table border='2'>
        <tr>
            <th>ID Producto</th>
            <th>Tipo de Producto</th>
            <th>Materiales Principales</th>
            <th>Precio de Venta</th>
            <th>Inventario Disponible</th>
            <th>Color</th>
            <th>Fecha de Creación</th>
        </tr>";

    if ($count > 0) {
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>";
            echo "<td>" . $row['id_producto'] . "</td>";
            echo "<td>" . $row['tipo_producto'] . "</td>";
            echo "<td>" . $row['materiales_principales'] . "</td>";
            echo "<td>" . $row['precio_venta'] . "</td>";
            echo "<td>" . $row['inventario_disponible'] . "</td>";
            echo "<td>" . $row['color'] . "</td>";
            echo "<td>" . $row['fecha_creacion'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<h2 style='color:red'>No hay registros de productos</h2>";
    }

    echo "<h3><a href='./mostrar_delete.php'>Eliminar Producto</a></h3>";
    echo "<h3><a href='./mostrar_registro_producto.php'>Registrar Producto</a></h3>";
}

mysqli_close($conexion);
?>
