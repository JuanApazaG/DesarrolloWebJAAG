<?php
$con = new mysqli("localhost", "root", "", "bd_carrerasusfx");
if ($con->connect_error)
    die("conexion fallada" . $con->connect_error);
?>
