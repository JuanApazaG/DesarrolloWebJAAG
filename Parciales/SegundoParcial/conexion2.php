<?php
$con = new mysqli("localhost", "root", "90xBkJ5^", "bs_censo");
if ($con->connect_error)
    die("conexion fallada" . $con->connect_error);
