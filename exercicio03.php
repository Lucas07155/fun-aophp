<!--Desenvolvido por Lucas De Carvalho Praxedes-->
  <!--DATA 10/09/2024 -->
  <!--Professor: Luís Alberto Pires de Oliveira-->
]<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peso Ideal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Calcular Peso Ideal</h2>
    <form method="post">
        Sexo: 
        <select name="sexo" required>
            <option value="feminino">Feminino</option>
            <option value="masculino">Masculino</option>
        </select><br><br>
        Altura (em metros): <input type="number" name="altura" step="any" required><br><br>
        <input type="submit" value="Calcular Peso Ideal">
    </form>
    <?php
    function calcularPesoIdeal($sexo, $altura) {
        if ($sexo == "feminino") {
            return (62.1 * $altura) - 44.7;
        } elseif ($sexo == "masculino") {
            return (72.2 * $altura) - 58;
        }
        return null;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sexo = $_POST["sexo"];
        $altura = $_POST["altura"];
        $pesoIdeal = calcularPesoIdeal($sexo, $altura);
        echo "<p>O peso ideal é: " . round($pesoIdeal, 2) . " kg</p>";
    }
    ?>
</body>
</html>
