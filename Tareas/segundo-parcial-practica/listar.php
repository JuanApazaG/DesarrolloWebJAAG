<?php
session_start();
if (!isset($_SESSION["usuario"])) {
    echo "No autenticado";
    exit;
}

include("conexion.php");
$usuario = $_SESSION["usuario"];
$nivel = $_SESSION["nivel"];

$sql = "SELECT id, titulo, imagen FROM libros";
$result = $con->query($sql);

echo "<table border='1'>
<tr>
<th>Titulo</th>
<th>Imagen</th>";
if ($nivel == 1) {
    echo "<th>Operaciones</th>";
}
echo "</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row["titulo"] . "</td>";
    echo "<td><img src='images/" . $row["imagen"] . "' width='50' height='75'></td>";
    if ($nivel == 1) {
        echo "<td>
            <button onclick='editarLibro(" . $row["id"] . ")'>Editar</button>
            <button onclick='eliminarLibro(" . $row["id"] . ")'>Eliminar</button>
        </td>";
    }
    echo "</tr>";
}
echo "</table>";

$con->close();