<?php
// Incluir el archivo de conexión a la base de datos
require "./logica/conexion.php";
mysqli_set_charset($conexion, 'utf8');

// Generar el query
$consulta_sql = "SELECT * FROM producto";

// Ejecutar el query y almacenar el resultado
$resultado = $conexion->query($consulta_sql);

// Contar el número de filas en el resultado
$count = mysqli_num_rows($resultado);

// Imprimir la tabla de productos
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

// Verificar si hay registros para mostrar
if ($count > 0) {
    // Imprimir cada registro de producto en la tabla
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
    // Mostrar mensaje si no hay registros
    echo "<h1 style='color:red'>Sin ningún registro de productos</h1>";
}

// Enlaces para eliminar o registrar productos
echo "
    <h1><a href='mostrar_delete.php'>Eliminar Producto</a></h1>
    <h1><a href='mostrar_registro.php'>Registrar Producto</a></h1>
";

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>
