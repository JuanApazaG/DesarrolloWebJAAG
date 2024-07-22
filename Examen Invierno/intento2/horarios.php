<?php
    $materia = $_GET['materia'];
    include("conexion.php");
    $sql = "SELECT dia, hora FROM horarios WHERE materia = '$materia'";
    $consulta = mysqli_query($con, $sql);
    $dias = array('Hora', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes');
    $horas = array('8-9', '9-10', '10-11', '11-12', '12-13','', '13-14', '14-15', '15-16', '16-17', '17-18');
    $horarios = array();
    while($horario = mysqli_fetch_array($consulta)){
        array_push($horarios, $horario['dia']."-".$horario['hora']);
    }
?>
<table border="1" id="table">
    <tr>
        <?php for($j = 0; $j < 6; $j++) { ?>
            <th><?php echo $dias[$j]?></th>
        <?php } ?>
    </tr>
    <?php for($i = 0; $i < 12; $i++) { 
        if ($i == 6) {
    ?>
        <tr>
            <td colspan="6" style="background-color: blue; text-align: center;"><?php echo $horas[$i-1]?> descanso</td>
        </tr>
    <?php
        } else{
    ?>
        <tr>
            <?php for($j = 0; $j < 6; $j++) { 
                if($i == 0){ ?>
                    <td style="background-color: blue; color: white"><?php echo $dias[$j]?></td>
                <?php } else if($j == 0 && $i > 0){ ?>
                    <td><?php echo $horas[$i-1]?></td>
                <?php } else if(in_array($dias[$j]."-".explode("-", $horas[$i-1])[0], $horarios)){ ?>
                    <td style="background-color: blue;"></td>
                <?php } else { ?>
                    <td></td>
                <?php } 
            } ?>
        </tr>
    <?php 
        }
    } ?>
</table>
