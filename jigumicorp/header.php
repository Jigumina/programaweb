<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();  // Inicia la sesión solo si no está activa
}

// Verificar si el usuario está logueado
$usuario_logueado = isset($_SESSION['username']);
?>

<header class="primary-header">
<h1>Jigumicorp</h1>
    <nav>
        <a href="index.php">Inicio</a>
        <?php if ($usuario_logueado): ?>
            <a href="canciones.php">Canciones</a>
            <a href="registrar_canciones.php">Registrar canciones</a>
            <a href="salir.php"><button>Cerrar sesión</button></a>
        <?php else: ?>
            <a href="login.php">Iniciar sesión</a>
            <a href="registrar.php">Registro</a>
        <?php endif; ?>
    </nav>
</header>
