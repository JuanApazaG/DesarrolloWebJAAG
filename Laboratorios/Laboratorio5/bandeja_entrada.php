<?php 
include('conexion.php');

$sql = "SELECT correo, asunto, mensaje FROM correos";

$resultado = $con->query($sql);
?>
<table>
    <th>Correo</th>
    <th>Asunto</th>
    <th>Mensaje</th>
    <?php
    while ($row = $resultado->fetch_assoc()){
        ?>
        <tr>
            <td><?php echo $row['correo'];?> </td>
            <td><?php echo $row['asunto']; ?> </td>
            <td><?php echo $row['mensaje']; ?> </td>
        </tr>
        <?php
    }
    ?>
</table>
