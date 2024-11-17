<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Producto</title>
</head>

<body>

    <header class="Titulo">
        <h3>Registro de Producto</h3>
    </header>
    <div class="Formulario">
        <form action="./logica/registrar_product.php" method="post">
            <hr>
            <div>
                <label for="tipo_producto">Tipo de Producto:</label>
                <input type="text" name="tipo_producto" required maxlength="100" placeholder="Ej. Jabón, Vela">
                <br><br>

                <label for="materiales_principales">Materiales Principales:</label>
                <input type="text" name="materiales_principales" required maxlength="255" placeholder="Ej. Cera, Aceite">
                <br><br>

                <label for="tamaño">Tamaño:</label>
                <input type="text" name="tamaño" required maxlength="50" placeholder="Ej. Pequeño, Mediano, Grande">
                <br><br>

                <label for="peso">Peso (en gramos):</label>
                <input type="number" name="peso" required placeholder="Peso en gramos">
                <br><br>

                <label for="color">Color:</label>
                <input type="text" name="color" required maxlength="50" placeholder="Ej. Azul, Rojo">
                <br><br>

                <label for="estilo">Estilo:</label>
                <input type="text" name="estilo" required maxlength="50" placeholder="Ej. Rústico, Moderno)">
                <br><br>

                <label for="precio_venta">Precio de Venta:</label>
                <input type="number" name="precio_venta" required step="0.01" placeholder="Precio de venta en MXN">
                <br><br>

                <label for="costo_produccion">Costo de Produccion:</label>
                <input type="number" name="costo_produccion" required step="0.01" placeholder="Costo de produccion en MXN">
                <br><br>

                <label for="inventario_disponible">Inventario Disponible:</label>
                <input type="number" name="inventario_disponible" required placeholder="Cantidad en inventario">
                <br><br>
            </div>
            <button type="submit">Registrar producto</button>
        </form>
    </div>

    <div>
        <a href='./admin.php'>Ver registros</a>
    </div>
</body>

</html>
