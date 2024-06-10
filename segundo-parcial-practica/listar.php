<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo json_encode(['success' => false, 'mensaje' => 'Usuario no autenticado']);
    exit;
}

$nivel = $_SESSION['nivel']; // Nivel del usuario almacenado en sesión

include("conexion.php");

$sql = "SELECT id, titulo, imagen FROM libros";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo '<table border="1">
            <tr>
                <th>Imagen</th>
                <th>Título</th>
                <th>Operaciones</th>
            </tr>';
    while ($row = $result->fetch_assoc()) {
        echo '<tr>
                <td><img src="' . $row['imagen'] . '" alt="' . $row['titulo'] . '" width="100"></td>
                <td>' . $row['titulo'] . '</td>
                <td>';
        if ($nivel == 1) {
            echo '<button onclick="editar(' . $row['id'] . ')">Editar</button>
                  <button onclick="eliminar(' . $row['id'] . ')">Eliminar</button>';
        }
        echo '</td>
              </tr>';
    }
    echo '</table>';
} else {
    echo 'No hay libros disponibles';
}
