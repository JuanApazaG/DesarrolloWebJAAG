<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    if (isset($_GET ['cadena'])){
        $cadena = $_GET ['cadena'];
        $arreglo = explode("", $cadena);
        $ps = 0 ;
        $mayor = 0;
        foreach ($arreglo as $indice => $valor){
            if (strlen($valor) > $mayor){
                $ps = $indice;
                $mayor = strlen($valor);
            }
        }
        echo "la palabra mas larga es:".$arreglo[$ps]; 

    }
    ?>


</body>
</html>