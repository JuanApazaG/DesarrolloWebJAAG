<?php
include ("operaciones.php");

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $operacion = $_POST['operacion'];

    $o = new Operaciones($num1);

    echo "<h2>Resultado</h2>";
    echo "<table border='3' style='border-color:green;background-color:white;'>";
    echo "<tr>";
    echo "<td>C a F </td>";
    echo "<td>C a K </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>", $o->Fahrenheit(), "</td>";
    echo "<td>", $o->Kelvin(), "</td>";
    echo "</tr>";
    echo "</table>";
} else {
    // Mostrar el formulario si no se ha enviado
    echo "<h2>Calculadora</h2>";
    echo "<form action='' method='post'>";
    echo "<label for='num1'>Ingrese una temperatura</label>";
    echo "<input type='number' name='num1' required><br>";
    echo "<label for='operacion'>Operación:</label>";
    echo "<select name='operacion' required>";
    echo "<option value='Celsius'>Celsius</option>";
    echo "<option value='Fahrenheit'>Fahrenheit</option>";
    echo "<option value='Kelvin'>Kelvin</option>";
    echo "</select><br>";
    echo "<input type='submit' value='calcular'>";
    echo "</form>";
}

