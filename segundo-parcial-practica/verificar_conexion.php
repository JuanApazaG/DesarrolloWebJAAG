<?php
include 'conexion.php';

$db = conectarBD();

$sql = "SELECT * FROM usuarios";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Carnet</th>
            </tr>";
    // Salida de los datos de cada fila
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["nombre"] . "</td>
                <td>" . $row["carnet"] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 resultados";
}

// Cerrar la conexión
$db->close();
