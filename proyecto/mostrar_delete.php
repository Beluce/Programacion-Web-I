<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Producto</title>
</head>

<body>
    <h1>Eliminar Producto</h1>
    <form method="POST" action="./logica/delete_product.php">
        <input type="number" name="id_producto" placeholder="ID del Producto" required />
        <br />
        <button type="submit">Eliminar producto</button> 
    </form>
    
    <div>
        <a href="./admin.php">Ver registros</a> 
    </div>
</body>

</html>
