<?php
$numero = $_GET["numero"];
$suma = 0;
echo $numero, "<br>";

while ($numero != 0 ){

    $suma += $numero % 10;
    $numero = (int) ($numero / 10);
}

echo "La suma de los digitos es: ".$suma;
;