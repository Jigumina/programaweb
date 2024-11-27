<?php
// Se usa el require para incluir el archivo de conexión
require "logica\Conexion.php";
mysqli_set_charset($conexion, 'utf8');


// Generar el query para obtener las sugerencias de canciones
$consulta_sql = "SELECT * FROM sugerencias_canciones";

// Mandar el query por medio de la conexión y almacenamos el resultado en una variable
$resultado = $conexion->query($consulta_sql);

// Retorna el número de filas del resultado. Si hay más de uno, lo usamos para imprimir el resultado en nuestra tabla
$count = mysqli_num_rows($resultado);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sugerencias</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php session_start(); // Iniciar sesión
if (!isset($_SESSION['username'])) {
   
    header('Location: login.php');
    exit();
}
include('header.php');
?>

<?php
echo "<div class='container'>";

if ($count > 0) {
    echo "<table>
            <tr>
                <th>Nombre Canción</th>
                <th>Sugerido Por:</th>
                <th>url</th>
                <th>Video</th>
                <th>Comentario</th>
            </tr>";

    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $row['nombre_cancion'] . "</td>";
        echo "<td>" . $row['sugerido_por'] . "</td>";
        echo "<td>" . $row['url_canc'] . "</td>";
        echo "<td><a href='" . htmlspecialchars($row['url_canc']) . "' target='_blank'>Ver Video</a></td>";
        echo "<td>" . $row['comentario'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<div class='no-record'>No hay sugerencias registradas.</div>";
}

echo "</div>";

echo "<div style='text-align: center;'>
        <a href='agregar_canciones.php' class='btn'>Agregar Nueva Sugerencia</a>
        <a href='EliminarSugerencia.php' class='btn'>Eliminar Sugerencia</a>
    </div>";

?>

<footer>
    <p>&copy; 2024 Sugerencias de Canciones IZONE</p>
</footer>

</body>
</html>