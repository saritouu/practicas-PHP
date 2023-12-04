<html>
<head>
    <title>Calculadora</title>
</head>
<body>
    <h3>CALCULADORA</h3>
    <form action="operar2.php" method="post">
        Ingrese el primer valor:
        <input type="text" name="valor1">
        <br>
        Ingrese el segundo valor:
        <input type="text" name="valor2">
        <br>
        <select name="operacion" id="">
            <option value="suma">sumar</option>
            <option value="resta">restar</option>
            <option value="multiplicar">multiplicar</option>
            <option value="dividir">dividir</option>
        </select>
        <br>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>