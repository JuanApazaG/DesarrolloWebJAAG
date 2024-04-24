<?php
class examen{
    private $cad1;
    private $cad2;
    public function __construct($cadena1,$cadena2){
        $this->cad1 = $cadena1;
        $this->cad2 = $cadena2;
    }
    //prueba para verificar si la cadena se separa en caracterestes
    function agregar($cadena){
        for ($i = 0; $i < strlen($cadena); $i++) {
            echo $cadena[$i] . "<br>";
            $aux=$i+1;
        }
        return $aux;
    }
    function verificar($cadena1, $cadena2){
        $b = 0;
        for ($i = 0; $i < strlen($cadena1); $i++) {
            for ($j = 0; $j < strlen($cadena2); $j++) {
                if($cadena1[$i] == $cadena2[$j]){
                    $b = 1;
                    break 2;
                } else {
                    $b = 0;
                }
            }
        }
        if($b == 1){
            echo "tienen letra en común";
        } else {
            echo "no tienen letra en común";
        }
        return $b;
    }
    
    function dibujar($cadena1, $cadena2){
        if($b=1){
            ?>
            <table border="1px">
            <?php
            $c1=0;
            $c2=0;
            for ($i = 0; $i < strlen($cadena1); $i++) {
                for ($j = 0; $j < strlen($cadena2); $j++) {
                    if($cadena1[$i] == $cadena2[$j]){
                        $b = 1;
                        $c1=$i;
                        $c2=$j;
                        break 2;
                    } else {
                        $b = 0;
                    }
                }
            }
            for ($i = 0; $i < strlen($cadena1); $i++) {
                ?>
                    <tr>
                <?php
                for ($j = 0; $j < strlen($cadena2); $j++) {
                    ?>
                        <td>
                    <?php
                    if($cadena1[$i] == $cadena2[$j]){
                        echo $cadena2[$j];
                    } else {
                        if($i==$c1){
                            echo $cadena2[$j];
                        }else{
                            if($j==$c2){
                                echo $cadena1[$i];
                            }else{
    
                            }
                        }
                    }
                    ?>
                        </td>
                    <?php
                }
                ?>
                    </tr>
                <?php
            }
            ?>
            </table>
            <?php
        }else{
            echo "no tienen letra en comun";
        }
        
    }    
}
$palabra1=$_GET['cadena1'];
$palabra2=$_GET['cadena2'];
$exam= new examen($palabra1,$palabra2);
//$tamanio1=$exam->agregar($palabra1);
//$tamanio2=$exam->agregar($palabra2);
//echo $tamanio1;
//echo "<br>";
//echo $tamanio2;
//echo "<br>";
$a=$exam->verificar($palabra1,$palabra2);
if($a==1){
    $exam->dibujar($palabra1,$palabra2);
}

?>
