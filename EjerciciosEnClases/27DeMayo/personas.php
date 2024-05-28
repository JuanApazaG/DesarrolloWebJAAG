<?php
include 'conexion.php';

// Consulta SQL para seleccionar todas las filas de la tabla personas
$sql = "SELECT * FROM personas";

// Ejecutar la consulta
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    // Mostrar los datos obtenidos
    while($fila = $resultado->fetch_assoc()) {
        echo "ID: " . $fila["id"]. " - Nombre: " . $fila["nombre"]. " - Apellidos: " . $fila["apellidos"]. " - Edad: " . $fila["edad"]. "<br>";
    }
} else {
    echo "No se encontraron resultados";
}

// Cerrar la conexión
$conn->close();
