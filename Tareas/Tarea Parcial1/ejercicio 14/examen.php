<?php
class examen{
    private $n;
    private $a;
    private $b;
    private $c;
    private $cadena;
    public function __construct(){
    }
    function fibonacci($n)
    {
        $a = 0;
        $b = 1;
        for ($i = 0; $i < $n; $i++) {
            echo $a . " ";
            $temp = $a;
            $a = $b;
            $b = $temp + $b;
        }
    }

    function mayor($a,$b,$c)
    {
        $x = 0;
        if ($a > $b) {
            $x = $a;
            $a = $b;
            $b = $x;
        }
        if ($a > $c) {
            $x = $a;
            $a = $c;
            $c = $x;
        }
        if ($b > $c) {
            $x = $b;
            $b = $c;
            $c = $x;
        }
        return $c;
    }

    function piramide($cadena)
    {
        $longitud = strlen($cadena);

    for ($i = 0; $i < $longitud; $i++) {
        // Espacios antes de la cadena
        echo str_repeat(" ", $longitud - $i - 1);
        
        // Parte izquierda de la pirámide
        echo substr($cadena, 0, $i + 1);

        // Parte derecha de la pirámide
        if ($i > 0) {
            echo strrev(substr($cadena, 0, $i));
        }

        // Salto de línea
        echo PHP_EOL;
    }
    }
}
?>