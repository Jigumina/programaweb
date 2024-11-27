<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Canciones</title>
</head>
<body>


    <?php
session_start(); // Iniciar sesión
if (!isset($_SESSION['username'])) {
   
    header('Location: login.php');
    exit();
}
include('header.php');

?>
    <main class="songs-container">
        <!-- Canción 1 -->
        <div class="song-item">
            <h2>Sequence</h2>
            <a href="https://youtu.be/eW-61oOanMw?si=GGr1NmTUnQscUJD3" target="_blank">
                <img src="https://img.youtube.com/vi/eW-61oOanMw/0.jpg" alt="Sequence" class="thumbnail">
            </a>
        </div>

        <!-- Canción 2 -->
        <div class="song-item">
            <h2>Panorama</h2>
            <a href="https://www.youtube.com/watch?v=G8GaQdW2wHc" target="_blank">
                <img src="https://img.youtube.com/vi/G8GaQdW2wHc/0.jpg" alt="Panorama" class="thumbnail">
            </a>
        </div>

        <!-- Canción 3 -->
        <div class="song-item">
            <h2>D-D-DANCE</h2>
            <a href="https://www.youtube.com/watch?v=1C77QDNoAgo" target="_blank">
                <img src="https://img.youtube.com/vi/1C77QDNoAgo/0.jpg" alt="D-D-DANCE" class="thumbnail">
            </a>
        </div>

    </main>

    <footer>
        <p>&copy; 2024 Jigumicorp | Todos los derechos reservados</p>
    </footer>

</body>
</html>
