<?php
$_num1=$_GET['numero1'];
$_num2=$_GET['numero2'];
$_suma=0;
$_suma=$_num1+$_num2;
?>
<style>
    .tabla{
        background-color: green;
        
    }
</style>
<table class="tabla" border="1px">
    <tr>
        <td>
            <?php echo $_num1 ?>
        </td>
        <td>
             + 
        </td>
        <td>
            <?php echo $_num2 ?>
        </td>
        <td>
            =
        </td>
        <td>
        <?php echo $_suma ?>
        </td>
    </tr>
</table>