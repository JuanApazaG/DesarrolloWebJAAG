<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo json_encode(['success' => false, 'mensaje' => 'Usuario no autenticado']);
    exit;
}

include("conexion.php");

$sql = "SELECT id, titulo, imagen FROM libros";
$result = $con->query($sql);

$libros = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $libros[] = $row;
    }
    echo json_encode(['success' => true, 'libros' => $libros]);
} else {
    echo json_encode(['success' => false, 'mensaje' => 'No hay libros disponibles']);
}
