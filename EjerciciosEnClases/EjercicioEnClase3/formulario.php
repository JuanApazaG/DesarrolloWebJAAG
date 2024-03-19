
<!DOCTYPE html>
<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <h2>Calculadora</h2>
    <p>frecha</p>
    <form action="calcular.php" method="post">
        <label for="num1">Número 1:</label>
        <input type="number" name="num1" required><br>
        <label for="num2">Número 2:</label>
        <input type="number" name="num2" required><br>
        <label for="operacion">Operación:</label>
        <select name="operacion" required>
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select><br>
        <input type="submit" value="calcular">
    </form>
</body>
</html>