<?php
include ("operaciones.php");

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operacion = $_POST['operacion'];

$o = new Operaciones($num1, $num2);

switch ($operacion){
    case 'sumar': echo $o->sumar();
    break;
    case 'restar': echo $o->restar();
    break;
    case 'multiplicar': echo $o->multiplicar();
    break;
    case 'dividir': echo $o->dividir();
    break;
}

