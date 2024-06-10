<?php
include 'conexion.php';

$correo = $_POST['correo'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$sql = "INSERT INTO correos (tipo, correo, asunto, mensaje, estado) VALUES ('E', '$correo', '$asunto', '$mensaje', 'N')";

if ($con->query($sql) === TRUE) {
    echo "Correo enviado exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
