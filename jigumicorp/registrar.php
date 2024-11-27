<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Registro</title>
</head>
<body>
    <header class="primary-header">
        <h1>Jigumicorp</h1>
        <nav>
            <a href="index.php">Inicio</a>
            <a href="Canciones.php">Canciones</a>
            <a href="registrar_canciones.php">Agregar canciones</a>
        </nav>
    </header>

    <main class="register-container">
    
            <form class="login-form" action= logica\enviar_usuario.php method="post">
                <h2>Crear Cuenta</h2>
            
                    <label for="nombre_usuario">Usuario</label>
                    <input type="text" id="nombre_usuario" name="nombre_usuario" placeholder="Usuario" required>
                    <br><br>
                    <label for="email">Correo Electrónico</label>
                    <input type="email" id="email" name="email" placeholder="Ingresa tu correo" required>
                    <br><br>
                    <label for="password">Contraseña</label>
<input type="password" id="password" name="contraseña" placeholder="Ingresa tu contraseña" required>
<br><br>
                    <label for="Cancion_favorita">Canción Favorita</label>
                    <input type="text" id="Cancion_favorita" name="cancion_favorita" placeholder="Tu canción favorita" required>
                    <br><br>
                    <button type="submit">Registrar</button>
                </div>
                <p class="create-account">
                    ¿Tienes una cuenta? <a href="login.php">Iniciar Sesión</a>
                </p>
            </form>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Izone-world | Todos los derechos reservados</p>
    </footer>
</body>
</html>
