<?php
$servername = "localhost"; // Puede que necesites cambiar esto si tu servidor MySQL no está en localhost
$username = "root"; // Reemplaza "tu_usuario" con el nombre de usuario de tu base de datos
$password = "90xBkJ5^"; // Reemplaza "tu_contraseña" con la contraseña de tu base de datos
$database = "prueba_censo"; // Reemplaza "tu_base_de_datos" con el nombre de tu base de datos

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}


