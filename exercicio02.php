 <!--Desenvolvido por Lucas De Carvalho Praxedes-->
  <!--DATA 10/09/2024 -->
  <!--Professor: Luís Alberto Pires de Oliveira-->
  <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de Moedas</title>
</head>
<body>
    <h2>Conversão de Moedas (Dólar para Real)</h2>
    <form method="post">
        Valor em Dólares: <input type="number" name="dolar" step="any" required>
        <input type="submit" value="Converter">
    </form>
    <?php
    function converterDolarParaReal($dolar) {
        $cotacao = 1.81; // Cotação fixa
        return round($dolar * $cotacao, 2);
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dolar = $_POST["dolar"];
        $real = converterDolarParaReal($dolar);
        echo "<p>O valor em reais é: R$ " . $real . "</p>";
    }
    ?>
</body>
</html>