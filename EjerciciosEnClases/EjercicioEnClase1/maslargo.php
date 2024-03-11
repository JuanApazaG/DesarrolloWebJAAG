<?php
    
        $cadena = $_GET ['cadena'];
        echo $cadena;
        $arreglo = explode("",$cadena);
        $pm = 0;
        foreach ($arreglo as $indice=>$valor){
            if(strlen($valor)>$mayor){
                $pm=$inidice;
                $mayor = strlen($mayor); 
            }
        }
        echo "la palabra mas larga es:".$arreglo[$pm]; 