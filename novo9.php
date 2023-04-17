<!DOCTYPE html>
<html>

<body>
    <form action="" method="post">
        <label for="">digete o nome</label>
        <input type="text" name="nome">
        <br>
        <label for="">digite o salario bruto</label>
        <input type="number" name="salario">
        <br>
        <label for="">numero de dependentes</label>
        <input type="number" name="dependentes">
        <br>
        <input type="submit" name="enviar">
    </form>

    <?php

    $nome = $_POST['nome'];
    $salarioB = $_POST['salario'];
    $dp = $_POST['dependentes'];

    if ($salarioB <= 600) {
        $descontoINSS = 0.08 * $salarioB;
    } elseif ($salarioB <= 1200) {
        $descontoINSS = 0.09 * $salarioB;
    } else {
        $descontoINSS = 0.10 * $salarioB;
    }

    $salarioL = $salarioB - $descontoINSS + (15 * $dp) + 40 + 100;
    echo "<br>Nome do funcionário: " . $nome;
    echo "<br>Salário líquido: R$ " . number_format($salarioL, 2, ',', '.');


    ?>
</body>

</html>