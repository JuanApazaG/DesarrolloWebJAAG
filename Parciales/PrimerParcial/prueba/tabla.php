<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Operación</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener la operación y el número ingresado
        $operacion = $_POST["operacion"];
        $numero = $_POST["numero"];

        // Crear la tabla con los resultados de la operación
        echo "<h2>Tabla de $operacion hasta $numero</h2>";
        echo "<table>";
        echo "<tr>";
        echo "<th></th>"; // Espacio en la primera fila, primera columna
        // Imprimir los números de 1 a $numero en la primera fila
        for ($i = 1; $i <= $numero; $i++) {
            echo "<th>$i</th>";
        }
        echo "</tr>";

        // Realizar la operación y mostrar los resultados en cada celda
        for ($i = 1; $i <= $numero; $i++) {
            echo "<tr>";
            echo "<th>$i</th>"; // Imprimir el número en la primera columna
            for ($j = 1; $j <= $numero; $j++) {
                $resultado = calcularResultado($operacion, $i, $j);
                echo "<td>$resultado</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    function calcularResultado($operacion, $fila, $columna) {
        switch ($operacion) {
            case 'suma':
                return $fila + $columna;
            case 'resta':
                return $fila - $columna;
            case 'multiplicacion':
                return $fila * $columna;
            case 'division':
                // Evitar la división por cero
                return ($columna != 0) ? $fila / $columna : "∞";
            default:
                return "Error";
        }
    }
    ?>
</body>
</html>
