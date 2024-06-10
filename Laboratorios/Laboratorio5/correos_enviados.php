<?php
include 'conexion.php';

$sql = "SELECT id, correo, asunto, mensaje FROM correos";
$resultado = $con->query($sql);
?>
<table border='1'>
    <thead>
        <tr>
            <th>Correo</th>
            <th>Asunto</th>
            <th>Mensaje</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($row = $resultado->fetch_assoc()) {
            ?>
            <tr onclick="verMensaje(<?php echo $row['id']; ?>)">
                <td><?php echo $row['correo']; ?></td>
                <td><?php echo $row['asunto']; ?></td>
                <td><?php echo substr($row['mensaje'], 0, 50) . '...'; ?></td>
            </tr>
            <?php
        }
        ?>
    </tbody>
</table>
<?php
$con->close();
?>
