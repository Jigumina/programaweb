<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Canción</title>
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
    <form class="login-form" action="logica\DeleteSug.php" method="post">
    <h2>Eliminar Canción</h2>
        <label for="url_canc">Url de la Canción:</label>
        <input type="text" name="url_canc" id="url_canc" required><br>

        <button type="submit">Eliminar</button>
    </form>
</form>


</body>
</html>