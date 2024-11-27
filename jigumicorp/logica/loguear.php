<?php
require 'Conexion.php';
session_start();

// Recibir datos del formulario
$nombre_usuario = $_POST['nombre_usuario'];
$contraseña = $_POST['password']; 

// Consultar el usuario en la base de datos
$q = "SELECT * FROM usuarios WHERE nombre_usuario = ?";
$stmt = $conexion->prepare($q);
$stmt->bind_param("s", $nombre_usuario);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    $usuario = $resultado->fetch_assoc();

    // Verificar la contraseña
    if (password_verify($contraseña, $usuario['contraseña'])) {
        $_SESSION['username'] = $nombre_usuario;
        header("Location: ../Canciones.php");
        exit();
    } else {
        header("Location: ../IndexError.php");
    }
} else {
    header("Location: ../IndexError.php");
}
?>
