<!DOCTYPE html>
<html>
<head>
    <title>4</title>
</head>


<body>
<form action="" method="post"> 
		<label for="nome">Digite a 1 nota</label>		
		<input type="number" name="nota1" id="nota1">;				
		<br>		
		<label for="nome">Digite a 2 nota</label>		
		<input type="number" name="nota2" id="nota2">;
		<br>
		<label for="nome">Digite a 3 nota</label>		
		<input type="number" name="nota3" id="nota3">;
		<input type="submit" value="enviar";
<form>
<?php 

$nota1 = $_POST ['nota1'];
$nota2 = $_POST ['nota2'];
$nota3 = $_POST ['nota3'];

$medianotas = ($nota1 + $nota2 + $nota3) / 3 ;

echo "<p> total das notas ". $medianotas ."</p>";
if( $medianotas > 7){
	echo "Aprovado";	
}elseif( $medianotas >= 4){
	echo " Prova final";
}else{
	echo " Reprovado";
}
 ?>
</body>

</html>