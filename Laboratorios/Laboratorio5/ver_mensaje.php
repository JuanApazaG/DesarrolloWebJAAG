<?php
include 'conexion.php';

$id = intval($_GET['id']);
$sql = "SELECT * FROM correos WHERE id = $id";
$resultado = $con->query($sql);

if ($resultado->num_rows > 0) {
    $row = $resultado->fetch_assoc();
    echo "<h2>De: " . $row["correo"] . "</h2>";
    echo "<h3>Asunto: " . $row["asunto"] . "</h3>";
    echo "<p>" . nl2br($row["mensaje"]) . "</p>";
} else {
    echo "El correo no existe.";
}
$con->close();
