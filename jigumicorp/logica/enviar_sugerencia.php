<?php
include "Conexion.php";

    $nombre_cancion = $_POST['nombre_cancion'];
    $sugerido_por = $_POST['sugerido_por'];
    $url_canc = $_POST['url_canc'];
    $comentario = $_POST['comentario'];


$buscarCancion = "SELECT * FROM sugerencias_canciones WHERE url_canc = '$url_canc'";
$resultado = $conexion -> query($buscarCancion);
$count =mysqli_num_rows($resultado);

if ($count == 1) {
    echo "La canción ya ha sido sugerida anteriormente.<br>";
    echo "<a href='../registrar_canciones.php'>Volver a sugerir una nueva canción</a>";
} else {
    // Insertar nueva sugerencia de canción
    $insertarCancion = "INSERT INTO sugerencias_canciones (nombre_cancion, sugerido_por, url_canc, comentario) VALUES (?, ?, ?, ?)";
    $stmt = $conexion->prepare($insertarCancion);
    $stmt->bind_param("ssss", $nombre_cancion, $sugerido_por, $url_canc, $comentario);


    if ($stmt->execute()) {

        // Redirigir a otra página (opcional)
        header("Location: ../registrar_canciones.php");
        exit();
    } else {
        echo "Error al registrar la canción: " . $stmt->error;
    }
}
?>
