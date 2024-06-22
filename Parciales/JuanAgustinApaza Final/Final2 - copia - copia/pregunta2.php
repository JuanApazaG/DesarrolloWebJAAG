<?php
include 'Alumno.php';
include 'ListaAlumnos.php';

$listaAlumnos = new ListaAlumnos();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['accion']) && $_POST['accion'] === 'eliminar') {
        $listaAlumnos->eliminarAlumno();
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pregunta 2</title>
    <script src="script.js" defer></script>
</head>
<body>
    <h1>Lista de Alumnos</h1>
    <?php echo $listaAlumnos->mostrarLista(); ?>
    <button onclick="insertarAlumno()">Insertar</button>
</body>
</html>
