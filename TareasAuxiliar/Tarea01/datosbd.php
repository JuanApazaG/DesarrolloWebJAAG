<?php
include('conexion.php');

$texto = $_POST['texto'];

$sql = "SELECT carrera FROM carreras";
$result = $con->query($sql);

$carreras = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $carreras[] = $row['carrera'];
    }
}

$resultados = array();
foreach ($carreras as $carrera) {
    if (stripos($carrera, $texto)) {
        array_push($resultados, $carrera);
    }
}

echo json_encode($resultados);

$con->close();
?>
