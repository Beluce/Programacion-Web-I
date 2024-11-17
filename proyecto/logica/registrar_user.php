<?php
require "conexion.php";

$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

$consulta_sql = "INSERT INTO administrador (nombre_usuario, email, password) VALUES (?, ?, ?)";

if ($stmt = $conexion->prepare($consulta_sql)) {
    $stmt->bind_param("sss", $usuario, $correo, $contrasena);
    $stmt->execute();
    $stmt->close();
    echo "<script>alert('Cuenta creada exitosamente'); window.location.href='../index.html';</script>";
} else {
    echo "<script>alert('Error al crear la cuenta'); window.history.back();</script>";
}

$conexion->close();
?>
