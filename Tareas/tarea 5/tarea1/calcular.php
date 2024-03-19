<?php
include 'OperacionesCadenas.php';

$cadena=$_GET ['cadena'];
echo "la cadena original es : ",$cadena,'<br/>';
$operacion=new OperacionesCadenas($cadena);

echo " la cadena invertida : ",$operacion->invertir(),'<br/>'; 
echo "la cadena mayuscula : ",$operacion->mayuscula(),'<br/>';
echo "la cadena minuscula : ",$operacion->minuscula(),'<br/>';





;