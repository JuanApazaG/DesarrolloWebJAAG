<?php
include("conexion.php");
if (isset($_GET['ordenar']))
{
    $ordenar=$_GET['ordenar'];
}
else
{
    $ordenar="id";
}
if (isset($_GET['filtro']))
{
    $filtro=$_GET['filtro'];
    $sql = "SELECT p.imagen,p.id,titulos,autor,editorial,ano,e.titulo as editorial FROM libros l
    LEFT JOIN editorial e on p.ideditorial=e.id where titulos like '%$filtro%' or autor like '%$filtro%' order by $ordenar asc";
}
else
{
    $sql = "SELECT p.imagen,p.id,titulos,autor,editorial,ano,e.titulo as editorial FROM libros l
    LEFT JOIN editorial e on p.ideditorial=e.id order by $ordenar asc";
}

$result = $con->query($sql);
$datos = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $datos[] = $row;
    }
}
echo json_encode($datos, JSON_UNESCAPED_UNICODE);
