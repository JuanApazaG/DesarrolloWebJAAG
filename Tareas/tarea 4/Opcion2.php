<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea 4</title>
</head>
<body>
    <h1>2.-  Genera un arreglo de números del 1 al 20. Luego, utiliza un ciclo foreach para separar los números en dos arreglos diferentes: uno para los números pares y otro para los números impares. Imprime ambos arreglos al final.</h1>
    
    <?php
    // Generar un arreglo de números del 1 al 20
    $numeros = [];
    for ($i = 1; $i <= 20; $i++) {
        $numeros[] = $i;
    }

    // Inicializar arreglos para números pares e impares
    $numeros_pares = [];
    $numeros_impares = [];

    // Iterar sobre cada número y separarlos en los arreglos correspondientes
    foreach ($numeros as $numero) {
        if ($numero % 2 == 0) {
            // Si el número es par, agregarlo al arreglo de números pares
            $numeros_pares[] = $numero;
        } else {
            // Si el número es impar, agregarlo al arreglo de números impares
            $numeros_impares[] = $numero;
        }
    }

    // Imprimir ambos arreglos
    echo "Números pares: " . implode(", ", $numeros_pares);
    echo "Números impares: " . implode(", ", $numeros_impares);
    ?>

</body>
</html>
