<?php 
    include('conexion.php');
    $materia = $_GET['materia'];

    $sql = "SELECT id,materia, dia, hora FROM horarios ";
    $consulta.mysqli_query($con, $sql);
    $dias = array('Hora', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes');
    $horas = array('8-9', '9-10', '10-11', '11-12', '12-13', '13-14', '14-15', '15-16', '16-17', '17-18');

    while($horario)