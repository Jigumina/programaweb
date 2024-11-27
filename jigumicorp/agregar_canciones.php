<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sugerir Canción</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
<header class="primary-header">
    <h1>Jigumicorp</h1>
        <nav >
            <a  href="index.php">Inicio</a>
            <a href="Canciones.php">Canciones</a>
            <a href="agregar_canciones.php">Agregar canciones</a>
        </nav>
    </header>

    
    <main class="login-container">
    <form class="login-form" action="logica\enviar_sugerencia.php" method="post">
    <h2>Sugerir Canción</h2>
        <form class="login-form" action="logica\loguear.php" method="post">
        <label for="nombre_cancion">Nombre de la Canción:</label>
        <input type="text" name="nombre_cancion" id="nombre_cancion" required><br>

        <label for="sugerido_por">Sugerido Por:</label>
        <input type="text" name="sugerido_por" id="sugerido_por" required><br>

        <label for="url_canc">URL de la Canción:</label>
        <input type="url" name="url_canc" id="url_canc" required><br>

        <label for="comentario">Comentario (Opcional):</label>
        <textarea name="comentario" id="comentario"></textarea><br>

        <button type="submit">Enviar Sugerencia</button>
    </form>
</form>


</body>
</html>
