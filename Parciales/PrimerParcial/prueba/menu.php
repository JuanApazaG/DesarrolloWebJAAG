<!DOCTYPE html>
<html>
<head>
    <title>Palabra</title>
</head>
<body>

<?php
include 'Palabra.php';  // Incluir la clase Palabra

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $opcion = $_POST["opcion"];
    
    switch ($opcion) {
        case "introducir":
            $palabra = $_POST["palabra"];
            $color = $_POST["color"];
            $color_fondo = $_POST["color_fondo"];
            
            $objPalabra = new Palabra($palabra, $color, $color_fondo);
            echo "<h2>Palabra Introducida: {$palabra}</h2>";
            break;
        
        case "cuadrado":
            $objPalabra->cuadrado();
            break;
        
        case "diagonal":
            $objPalabra->diagonal();
            break;
        
        default:
            echo "Opción no válida";
    }
}
?>

<h2>Menú de Opciones</h2>
<form method="post">
    <label for="opcion">Seleccionar opción:</label>
    <select name="opcion" id="opcion">
        <option value="introducir">Introducir palabra</option>
        <option value="cuadrado">Cuadrado</option>
        <option value="diagonal">Diagonal</option>
    </select>
    <br><br>
    
    <div id="introducir">
        <label for="palabra">Palabra:</label>
        <input type="text" name="palabra">
        <br><br>
        <label for="color">Color:</label>
        <input type="color" name="color">
        <br><br>
        <label for="color_fondo">Color de fondo:</label>
        <input type="color" name="color_fondo">
    </div>
    
    <input type="submit" value="Ejecutar">
</form>

</body>
</html>
