<html>
    <body>
        
    
<form method="post" action="">
		<label for="capacidade">Digite a capacidade do elevador:</label>
		<input type="number" name="capacidade" id="capacidade"><br><br>
		<label for="peso1">Digite o peso da 1 pessoa:</label>
		<input type="number" name="peso1" id="peso1"><br><br>
		<label for="peso2">Digite o peso da 2 pessoa:</label>
		<input type="number" name="peso2" id="peso2"><br><br>
		<label for="peso3">Digite o peso da 3 pessoa:</label>
		<input type="number" name="peso3" id="peso3"><br><br>
		<label for="peso4">Digite o peso da 4 pessoa:</label>
		<input type="number" name="peso4" id="peso4"><br><br>
		<label for="peso5">Digite o peso da 5 pessoa:</label>
		<input type="number" name="peso5" id="peso5"><br><br>
		<input type="submit" value="Verificar">
	</form>

    <?php 
    

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $capacidade = $_POST['capacidade'];
   
        $peso1 = $_POST ['peso1'];
        $peso2 = $_POST ['peso2'];
        $peso3 = $_POST ['peso3'];
        $peso4 = $_POST ['peso4'];
        $peso5 = $_POST ['peso5'];
    
        $totalpeso = $peso1 + $peso2 + $peso3 + $peso4 + $peso5;
        if ($totalpeso > $capacidade) {
            echo "O elevador excedeu a carga maxima!";
        } else {
            echo "O elevador esta liberado para subir.";
        }
    }
    
    
    
    ?>
    </body>
    </html>