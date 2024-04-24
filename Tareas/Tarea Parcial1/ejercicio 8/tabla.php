<?php
$_numf=$_GET['fila'];
$_numc=$_GET['columna'];
?>
<table border="1px">
    <style>
        .griss{
            background-color: gray;
        }
    </style>
<?php
for($i=0;$i<=$_numf;$i++){
    ?>
        <tr>
    <?php
    for($j=0;$j<=$_numc;$j++){
        if($i==0 && $j== 0){
            ?>
            <td class="griss"></td>
            <?php            
        }else{
            if($j==0){
                ?>
                <td class="griss"> <?php echo $i ?></td>
                <?php 
            }else{
                if($i==0){
                    ?>
                    <td class="griss"> <?php echo $j ?></td>
                    <?php 
                }else{
                ?>
                <td> <?php echo $i*$j ?></td>
                <?php 
                }
            }
        }
    }   
    ?>
    </tr>
    <?php
}
?>
</table>
