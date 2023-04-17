<!DOCTYPE html>
<html>
<head>
    <title>3</title>
</head>


<body>
<form action="novo 3.php" method="post"> 

		<label for="nome">Digite o valor 1:</label>
		
		<input type="number" name="valor1" id="valor1">;
		
		<label for="idade">Digite o valor 2:</label>
		
		<input type="number" name="valor2" id="valor2">;
		<br>
		
		
		
		<input type="submit" value="enviar";

<form>

<?php 

$VA = $_POST["valor1"];
$VB = $_POST["valor2"];

$trocaA = $VB;
$trocaB = $VA;

echo "<p> primeiro valor ". $trocaA . "</p>";
echo "<p> segundo valor ". $trocaB . "</p>";



?>


</body>