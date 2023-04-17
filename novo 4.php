<!DOCTYPE html>
<html>
<head>
    <title>4</title>
</head>


<body>
<form action="novo 4.php" method="post"> 
		<label for="nome">Digite o valor recebido</label>		
		<input type="number" name="valor1" id="valor1">;				
		<br>		
		<input type="submit" value="enviar";

<form>

<?php 
$valor1 = $_POST['valor1'];
$desconto10 = $valor1 * 0.10;

echo "<p> desconto de 10%: ". $desconto10 . "</p>";

$parcela3 = $valor1 / 3;
echo "<p> parcelado em 3x: ". $parcela3 . "</p>";

$porcento5 = $desconto10 - ($desconto10 / 100 * 5);
echo "<p> comissao do vendedor: ". $porcento5 . "</p>";

$parcelavenda = $parcela3 - ($valor1 / 100 * 5);
echo "<p> comissao do vendedor 5%: ". $parcelavenda. "</p>";
?>

</body>
</html>