<!DOCTYPE html>
<html>
<head>
    <title>Maior Valor</title>
</head>
<body>
    <h1>Maior Valor</h1>
    <form method="post" action="">
        <label for="valor1">Digite o primeiro valor:</label>
        <input type="number" name="valor1" id="valor1">
        <br>
        <label for="valor2">Digite o segundo valor:</label>
        <input type="number" name="valor2" id="valor2">
        <br>
        <input type="submit" name="submit" value="Comparar">
    </form>

    <?php
    // Verifica se o formulário foi submetido
    if (isset($_POST["submit"])) {
        // Obtém os valores do formulário
        $valor1 = floatval($_POST["valor1"]);
        $valor2 = floatval($_POST["valor2"]);

        // Verifica e exibe o maior valor
        if ($valor1 > $valor2) {
            echo "<p>O maior valor e: " . $valor1 . "</p>";
        } elseif ($valor2 > $valor1) {
            echo "<p>O maior valor e: " . $valor2 . "</p>";
        } else {
            echo "<p>Os valores sao iguais: " . $valor1 . "</p>";
        }
    }
    ?>
</body>
</html>
