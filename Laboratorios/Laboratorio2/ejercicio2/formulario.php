      
<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <h2>Calculadora</h2>
    <form action="calcular.php" method="post">
        <label for="num1">Ingrese una temperatura</label>
        <input type="number" name="num1" required><br>
        <label for="operacion">Operación:</label>
        <select name="operacion" required>
            <option value="Celsius">Celsius</option>
            <option value="Fahrenheit">Fahrenheit</option>
            <option value="Kelvin">Kelvin</option>

      
        </select><br>
        <input type="submit" value="calcular">
    </form>
</body>
</html>