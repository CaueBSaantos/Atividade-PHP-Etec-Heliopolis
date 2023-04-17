<!DOCTYPE html>
<html>

<body>
    <form action="" method="post">
        <label for="">Primeiro numero:</label>
        <input type="number" name="number1">
        <br>
        <label for="">Segundo numero:</label>
        <input type="number" name="number2">
        <br>
        <label for="">Terceiro Numero: </label>
        <input type="number3" name="number3">
        <br>
        <input type="submit" name="enviar">
    </form>

    <?php 
    $n1 = $_POST ['number1'];
    $n2 = $_POST ['number2'];
    $n3 = $_POST ['number3'];

    $array = array ($n1,$n2,$n3);

    arsort($array);
    print_r($array);
    
    ?>
</body>
</html>