<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pregunta 2</title>
    <!-- <link rel="stylesheet" href="pregunta2.css"> -->
    <style>
        

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            background-color: #f2f2f2;
        }

        table {
            width: 80%; 
            margin-top: 20px;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #f79646;
            padding: 8px;
            text-align: center;
            color: black;
        }

        th {
            background-color: #f79646;
            
            color: black;
        }
    </style>
</head>
<body>
    <?php 

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $operacion = $_POST['operacion'];
        $num1 = $_POST['num1'];
        
        echo "<h2>Tabla $operacion</h2>";
        echo "<table > ";
        echo "<tr style='background-color: #F79646;'>";
        echo "<th></th>";

        for ($i =1; $i <= $num1; $i++){
            echo "<th style='color:white; '>$i</th>";
        }
        echo "</tr>";

        for ($i = 1; $i <= $num1; $i++){
            echo "<tr >";
            echo "<th style='background-color: #F79646;'>$i</th>";
            for($j =1; $j<=$num1; $j++){
                $resultado = operaciones($operacion, $i, $j);
                echo "<td>$resultado</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }

    function operaciones($operacion, $fila, $columna){
        switch($operacion){
            case 'sumar': 
                return $fila + $columna;
                
            case 'restar':
                return $fila - $columna;
            case 'multiplicacionr':
                return $fila * $columna;
            case 'division':
                return ($columna != 0) ? $fila / $columna : "∞";
            default: 
            return "No funciona";
        }
    }

    ?>

</body>
</html>