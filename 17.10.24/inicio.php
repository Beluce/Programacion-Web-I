<?php
include "conexion.php";

$consulta_sql = "SELECT * FROM alumno";
$resultado = $conexion->query($consulta_sql);
$count = mysqli_num_rows($resultado);

echo "
    <table border='1' cellpadding='5' cellspacing='0'>
        <tr>
            <th>No. Cuenta</th>
            <th>Nombre de Usuario</th>
            <th>Carrera</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Email</th>
            <th>Password</th>
            <th>Fecha de Registro</th>
            <th>Permisos</th>
        </tr>
    ";

if ($count > 0) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $row['no_cuenta'] . "</td>";
        echo "<td>" . $row['nombre_usuario'] . "</td>";
        echo "<td>" . $row['carrera'] . "</td>";
        echo "<td>" . $row['direccion'] . "</td>";
        echo "<td>" . $row['telefono'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "<td>" . $row['fecha_registro'] . "</td>";
        echo "<td>" . $row['permisos'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No hay alumnos registrados.";
}

?>