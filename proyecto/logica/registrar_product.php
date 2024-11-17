<?php
require "conexion.php";
mysqli_set_charset($conexion, 'utf8');

$buscarProducto = "SELECT * FROM producto WHERE tipo_producto = '$_POST[tipo_producto]' AND color = '$_POST[color]'";
$resultado = $conexion->query($buscarProducto);
$count = mysqli_num_rows($resultado);

if ($count == 1) {
    echo "<div>
            <strong>Error:</strong> El producto ya está registrado.
          </div>";
} else {
    $insertar = "INSERT INTO producto (tipo_producto, materiales_principales, tamaño, peso, color, estilo, precio_venta, costo_produccion, inventario_disponible)
                 VALUES (
                     '$_POST[tipo_producto]',
                     '$_POST[materiales_principales]',
                     '$_POST[tamaño]',
                     '$_POST[peso]',
                     '$_POST[color]',
                     '$_POST[estilo]',
                     '$_POST[precio_venta]',
                     '$_POST[costo_produccion]',
                     '$_POST[inventario_disponible]'
                 )";

    if (mysqli_query($conexion, $insertar)) {
        echo "<div>
                Producto registrado con éxito.
              </div>";
    } else {
        echo "<div>
                <strong>Error:</strong> No se pudo registrar el producto. " . mysqli_error($conexion) . "
              </div>";
    }
    echo "<div>
    <a href='../mostrar_registro.php'>Generar un nuevo registro</a>
    <a href='../admin.php'>Ver registros</a>
    </div>";
}

mysqli_close($conexion);
?>