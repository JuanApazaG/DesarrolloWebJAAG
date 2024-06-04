<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    echo json_encode(["error" => "No autenticado"]);
    exit;
}

include("conexion.php");

$sql = "SELECT titulo, imagen FROM libros";
$result = $con->query($sql);

$libros = [];
while ($row = $result->fetch_assoc()) {
    $libros[] = $row;
}

echo json_encode($libros);

$con->close();
