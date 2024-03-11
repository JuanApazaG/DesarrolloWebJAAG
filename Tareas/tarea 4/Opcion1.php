<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 4</title>
</head>
<body>
    <h1>1.-  Crea un programa en php que permita de una cadena determinada  de caracteres que contenga palabras separadas por espacios, el programa debe  imprimir la palabra mas larga</h1>
    <?php
    // Cadena de ejemplo con palabras separadas por espacios
    $cadena = "hola soy Juan Agustin Apaza y tengo 22 años y soy de bolivia";

    //variables
    $palabra = ''; // Para almacenar la palabra actual
    $palabra_mas_larga = ''; // Para almacenar la palabra más larga encontrada

    // Iterar sobre cada carácter en la cadena
    for ($i = 0; $i < strlen($cadena); $i++) { //strlen se utiliza para obtener la longitud
        // Si el carácter actual no es un espacio, agregarlo a la palabra
        if ($cadena[$i] != ' ') {
            $palabra .= $cadena[$i];
        } else {
            // Si encontramos un espacio, verificar si la palabra actual es más larga que la palabra más larga encontrada hasta el momento
            if (strlen($palabra) > strlen($palabra_mas_larga)) {
                // Si es así, actualizar la palabra más larga
                $palabra_mas_larga = $palabra;
            }
            // Restablecer la palabra actual para la siguiente palabra
            $palabra = '';
        }
    }

    // Verificar si la última palabra es la más larga
    if (strlen($palabra) > strlen($palabra_mas_larga)) {
        $palabra_mas_larga = $palabra;
    }

    // Imprimir la palabra más larga
    echo "La palabra más larga es: " . $palabra_mas_larga;
    ?>

</body>
</html>
