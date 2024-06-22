<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Palabra</title>
    <style>
        .container {
            margin: 20px;
        }
        .output {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Mostrar Palabra</h1>
        <!-- Formulario para ingresar los datos -->
        <form method="post">
            <label for="palabra">Palabra:</label>
            <input type="text" id="palabra" name="palabra" required>
            <br><br>
            <label for="color">Color de la letra:</label>
            <input type="color" id="color" name="color" required>
            <br><br>
            <label for="color_fondo">Color de fondo:</label>
            <input type="color" id="color_fondo" name="color_fondo" required>
            <br><br>

            <input type="radio" id="cuadrado" name="forma" value="cuadrado" required>
            <label for="cuadrado">Cuadrado</label>
            <br>
            <input type="radio" id="diagonal" name="forma" value="diagonal" required>
            <label for="diagonal">Diagonal</label>
            
            <br><br>
            <input type="submit" value="Mostrar">
        </form>
        
        <div class="output">
            <?php
            // Verificamos si el formulario ha sido enviado
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                include 'Palabra.php';  // Incluimos la clase Palabra
                // Obtenemos los datos del formulario
                $palabra = $_POST['palabra'];
                $color = $_POST['color'];
                $color_fondo = $_POST['color_fondo'];
                $forma = $_POST['forma'];

                // Creamos una instancia de la clase Palabra
                $palabraObj = new Palabra($palabra, $color, $color_fondo);
                
                // Llamamos al método correspondiente según la opción seleccionada
                if ($forma == 'cuadrado') {
                    $palabraObj->mostrarCuadrado();
                } else if ($forma == 'diagonal') {
                    $palabraObj->mostrarDiagonal();
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
