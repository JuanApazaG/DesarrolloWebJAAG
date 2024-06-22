<?php
// Incluye las clases necesarias
require_once 'Alumno.php';
require_once 'ListaAlumnos.php';

// Crea una nueva instancia de ListaAlumnos
$listaAlumnos = new ListaAlumnos();

// Verifica si la solicitud es un POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtiene la acción solicitada desde los datos POST
    $accion = $_POST['accion'];

    // Maneja la acción según lo solicitado
    if ($accion === 'insertar') {
        // Obtiene los datos del formulario POST
        $CU = $_POST['cu'];
        $nombres = $_POST['nombres'];
        $apellidos = $_POST['apellidos'];

        // Verifica que todos los campos necesarios estén presentes
        if ($CU && $nombres && $apellidos) {
            // Crea una nueva instancia de Alumno con los datos recibidos
            $alumno = new Alumno($CU, $nombres, $apellidos);

            // Inserta el alumno en la lista
            $listaAlumnos->insertarAlumno($alumno);
        }
    } elseif ($accion === 'eliminar') {
        // Elimina un alumno de la lista
        $listaAlumnos->eliminarAlumno();
    }

    // Redirige de vuelta a la página principal después de procesar la acción
    header('Location: pregunta3.php');
    exit(); // Finaliza el script para evitar cualquier salida adicional
}

// Muestra la lista de alumnos actual en el sistema
$listaAlumnos->mostrarLista();
