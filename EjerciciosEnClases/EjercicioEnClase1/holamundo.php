<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Definir los valores de $a y $b (filas y columnas)
    $a = 5; // Filas
    $b = 4; // Columnas

    // Iniciar la tabla HTML
    echo '<table border="1">';

    // Loop para crear filas
    for ($fila = 1; $fila <= $a; $fila++) {
        echo '<tr>'; // Inicia una fila en la tabla
        
        // Loop para crear columnas
        for ($columna = 1; $columna <= $b; $columna++) {
            echo '<td>'; // Inicia una celda en la fila
            
            // Calcula el valor para esta celda
            $valor = $fila * $columna * 2;
            
            // Imprime el valor en la celda
            echo $valor;
            
            echo '</td>'; // Cierra la celda
        }
        
        echo '</tr>'; // Cierra la fila
    }

    // Cierra la tabla HTML
    echo '</table>';
    ?>
</body>
</html>