<?php
require_once 'Operaciones.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacion = $_POST["operacion"];

    $operaciones = new Operaciones();

    switch ($operacion) {
        case 'sumar':
            $resultado = $operaciones->sumar($num1, $num2);
            break;
        case 'restar':
            $resultado = $operaciones->restar($num1, $num2);
            break;
        case 'multiplicar':
            $resultado = $operaciones->multiplicar($num1, $num2);
            break;
        case 'dividir':
            $resultado = $operaciones->dividir($num1, $num2);
            break;
        default:
            $resultado = "Operación no válida.";
            break;
    }

    echo "El resultado de la operación es: $resultado";
}
