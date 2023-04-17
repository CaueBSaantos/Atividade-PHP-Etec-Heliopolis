<!DOCTYPE html>
<html>
<head>
    <title>Soma das Idades</title>
</head>
<body>

<form action="novo 2.php" method="post"> 

		<label for="nome">Digite o primeiro nome:</label>
		
		<input type="text" name="nome1" id="nome1">;
		
		<label for="idade">Digite o primeira idade:</label>
		
		<input type="number" name="idade1" id="idade1">;
		<br>
		<label for="nome2">Digite o segundo nome:</label>
		
		<input type="text" name="nome2" id="nome2">;
		<label for="idade2">Digite o segunda idade:</label>
		<input type="number" name="idade2" id="idade2">;
		<input type="submit" value="enviar";
	

<form>
   <?php 
   
	$nome1 = $_POST['nome1'];
	$idade1 = $_POST['idade1'];
	
	$nome2 = $_POST['nome2'];
	$idade2 = $_POST['idade2'];
	
	$somaidade = $idade1 + $idade2;
	
	echo "<p> o total das idades somadas e de: ". $somaidade . "</p>";
   
   
   
   ?>
</body>
</html>
