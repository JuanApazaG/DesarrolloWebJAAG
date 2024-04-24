<?php
$_numero=$_GET['numero'];
$_arraydia=['lunes','martes','miercoles','jueves','viernes','sabado','domingo'];
if($_numero>=1 && $_numero<=7){
    for($i=0;$i<=6;$i++){
        if($_numero-1==$i){
            ?>
            <table border="2px">
                <td>
                    <?php print_r($_arraydia[$i]) ; ?>
                </td>
                <td>
                    <img src="images/ticketbien.jpg" width="30px">
                </td>
            </table>
            <?php
            
        }
    }
}else{
    echo "numero incorrecto ingrese un numero del 1 al 7";
    ?>
    <meta http-equiv="refresh" content="5; url=form_dia.html">
    <?php
}
?>