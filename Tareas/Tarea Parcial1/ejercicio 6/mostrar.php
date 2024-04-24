<?php
$_nombre=$_GET['nombre'];
$_ciudad=$_GET['ciudad'];
?>
<style>
    .rojo{
        color: red;
    }
</style>
<p>Mi nombre es :  <b><?php echo $_nombre ?> </b> </p>
<p class="rojo"> Mi ciudad es : <?php echo $_ciudad ?> </p>
