<?php
$_numf=$_GET['fila'];
$_numc=$_GET['columna'];
$b=0;
?>
<link rel="stylesheet" href="estilos.css">
<table>
    <?php
for($i=1;$i<=$_numf;$i++){
    ?>
    <tr>
    <?php
    if($b==0){
        $b=1;
        for($j=1;$j<=$_numc;$j++){
            ?>
            <td class="rojo"></td>
            <?php
        }
    }else{
        if($b==1){
            $b=2;
            for($j=1;$j<=$_numc;$j++){
                ?>
                <td class="amarillo"></td>
                <?php
            }
        }else{
            if($b==2){
                $b=0;
                for($j=1;$j<=$_numc;$j++){
                    ?>
                    <td class="verde"></td>
                    <?php
                }
            }else{

            }
        }
    }
   
    ?>
    </tr>
    <?php
}?>
</table>
