

<?php
include "Conexion.php";


// Recibir datos del formulario
$nombre_usuario = $_POST['nombre_usuario'];
$email = $_POST['email'];
$password = $_POST['contraseña']; 
$cancion_favorita = $_POST['cancion_favorita'];

// Verificar si el usuario ya existe
$buscarusuario = "SELECT * FROM usuarios WHERE nombre_usuario = ?";
$stmt = $conexion->prepare($buscarusuario);
$stmt->bind_param("s", $nombre_usuario);
$stmt->execute();
$resultado = $stmt->get_result();
$count = $resultado->num_rows;

if ($count == 1) {
    echo "El usuario o email ya está registrado<br>";
    echo "<a href='../Registrar.php'>Nuevo registro</a>";
} else {
    // Cifrar contraseña pq no quiero robar ceuntas
    $password_hash = password_hash($password, PASSWORD_BCRYPT);

    // Insertar nuevo usuario
    $insertar = "INSERT INTO usuarios (nombre_usuario, email, contraseña, cancion_favorita) VALUES (?, ?, ?, ?)";
    $stmt = $conexion->prepare($insertar);
    $stmt->bind_param("ssss", $nombre_usuario, $email, $password_hash, $cancion_favorita);

    if ($stmt->execute()) {
        echo "<br><h1>Usuario creado con éxito</h1>";
        echo "<a href='../Registrar.php'>Puedes generar un nuevo registro</a><br>";
        echo "<a href='../Canciones.php'>Sugerir Canciones</a>";
        // Redirigir a otra página (opcional)
        header("Location: ../login.php");
        exit();
    } else {
        echo "Error al registrar el usuario: " . $stmt->error;
    }
}

?>

