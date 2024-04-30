<?php
$con = new mysqli("localhost", "root", "hola123", "bd_alumnos");
if ($con->connect_error){
    die("conexion fallada" . $con->connect_error);
}