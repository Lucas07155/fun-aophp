 <!--Desenvolvido por Lucas De Carvalho Praxedes-->
  <!--DATA 10/09/2024 -->
  <!--Professor: Luís Alberto Pires de Oliveira-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Temperatura</title>
</head>
<body>
    <h2>Conversão de Temperatura (Fahrenheit para Celsius)</h2>
    <form method="post">
        Temperatura em Fahrenheit: <input type="number" name="fahrenheit" step="any" required>
        <input type="submit" value="Converter">
    </form>

    <?php
    function fahrenheitParaCelsius($fahrenheit) {
        return ($fahrenheit - 32) * 5 / 9;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fahrenheit = $_POST["fahrenheit"];
        $celsius = fahrenheitParaCelsius($fahrenheit);
        echo "<p>A temperatura em Celsius é: " . round($celsius, 2) . "°C</p>";
    }
    ?>
</body>
</html>