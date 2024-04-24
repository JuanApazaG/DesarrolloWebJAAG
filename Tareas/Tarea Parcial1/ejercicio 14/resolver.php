<?php
include ("examen.php");
$examen=new examen();
$opcion = $_GET["opcion"];
    switch ($opcion) {
        case 'fibonacci':
            $n = $_GET['n'];
            echo "<h2>Resultado de Fibonacci para n = $n:</h2>";
            $examen->fibonacci($n);//llamar al metodo
            break;
        case 'mayor':
            $a = $_GET["a"];
            $b = $_GET["b"];
            $c = $_GET["c"];
            $examenM=$examen->mayor($a,$b,$c);
            echo "<h2>El mayor número es: $examenM</h2>";
            break;
        case 'piramide':
            $cadena = $_GET['cadena'];
            $examen->piramide($cadena);
            break;
        default:
            echo "<h2>Opción no válida</h2>";
            break;
        }
?>