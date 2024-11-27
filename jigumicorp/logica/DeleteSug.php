<?php
require "Conexion.php";
mysqli_set_charset($conexion, 'utf8');
$registroEliminado = $_POST['url_canc'];

// Verifica que no esté vacío
if (!empty($registroEliminado)) {

    $consulta = "DELETE FROM sugerencias_canciones WHERE url_canc = '$registroEliminado'";

    // Ejecuta la consulta
    mysqli_query($conexion, $consulta);
}

// Cierra la conexión
mysqli_close($conexion);

header('Location: ../registrar_canciones.php');
exit();
?>
