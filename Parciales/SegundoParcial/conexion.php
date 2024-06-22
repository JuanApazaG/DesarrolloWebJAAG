<?php
$con = new mysqli("localhost", "root", "90xBkJ5^", "bd_biblioteca");
if ($con->connect_error)
    die("Conexión fallida" . $con->connect_error);
