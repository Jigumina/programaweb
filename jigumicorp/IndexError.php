<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Izone-world</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
   <header class="primary-header">
    <h1>Jigumicorp</h1>
        <nav >
            <a  href="index.php">Inicio</a>
            <a href="Canciones.php">Canciones</a>
            <a href="registrar_canciones.php">Agregar canciones</a>
        </nav>
    </header>

   
    <main class="login-container">
        <form class="login-form" action="logica\loguear.php" method="post">
    <h2>Error en niciar Sesión</h2>
    
    <label for="nombre_usuario">Nombre de usuario</label>
    <input type="text" id="nombre_usuario" name="nombre_usuario" placeholder="Ingresa tu nombre de usuario" required>
    
    <label for="password">Contraseña</label>
    <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
    
    <button type="submit">Iniciar Sesión</button>
</form>

            
            <!-- Enlace para Crear Cuenta -->
            <p class="create-account">
                ¿No tienes una cuenta? <a href="registrar.php">Crear cuenta</a>
            </p>
        </form>
    </main>

    <footer>
        <p>&copy; 2024 Izone-world | Todos los derechos reservados</p>
    </footer>
</body>
</html>
