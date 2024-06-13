<?php 
include('conexion.php');

$sql = "SELECT correo, asunto, mensaje,tipo FROM correos";

$resultado = $con->query($sql);
?>
<table>
    <th>Correo</th>
    <th>Tipo</th>
    <?php
    while ($row = $resultado->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['correo'];?> </td>
            <td><?php echo $row['tipo'];?> </td>
        </tr>
        <?php
    }
    ?>
</table>
