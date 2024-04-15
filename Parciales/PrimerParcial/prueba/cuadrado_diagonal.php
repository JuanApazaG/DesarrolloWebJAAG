<?php
// Incluir la clase Palabra
include 'Palabra.php';

// Manejar la opción seleccionada por el usuario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["opcion"] == "cuadrado") {
        $palabra = new Palabra("examen", "banco", "red");
        $palabra->Cuadrado();
    } elseif ($_POST["opcion"] == "diagonal") {
        $palabra = new Palabra("parcial", "azul", "amarillo");
        $palabra->Diagonal();
    }
}