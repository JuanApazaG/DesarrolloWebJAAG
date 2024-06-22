<?php
    $materia = $_GET['materia'];

    include("connection.php");
    $sql = "SELECT id, nombres_apellidos, calificacion FROM alumnos WHERE materia = '$materia'";
    $consulta = mysqli_query($con, $sql);
    $num = 0;
?>
<div class="informes">
<table border=1 style="border-collapse: collapse; width: 100%;">
    <tr>
        <th style="background-color:rgb(59, 124, 246); padding: 10px; padding-bottom: 50px;">Nro.</th>
        <th style="background-color:rgb(59, 124, 246); padding: 10px; padding-bottom: 50px;">Nombre y Apellidos</th>
        <th style="background-color:rgb(59, 124, 246); padding: 10px; padding-bottom: 50px;">Calificación</th>
    </tr>
    <?php while($alumno = mysqli_fetch_array($consulta)){ 
        $num += 1;
        ?>
        <tr>
            <td style="border:1px solid black; text-align: center;"><?php echo $num ?></td>
            <td style="border:1px solid black"><?php echo $alumno["nombres_apellidos"]; ?></td>
            <td style="border:1px solid black; text-align: center;">
                <input type="number" id="<?php echo $alumno["id"] ?>" value="<?php echo $alumno["calificacion"];?>" onchange="subirCalificacion(this)" style="border: 3px solid orange; padding: 0px;">
            </td>
        </tr>
    <?php } ?>
</table>
</div>

