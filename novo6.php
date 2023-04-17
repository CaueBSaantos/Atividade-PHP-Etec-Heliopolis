<!DOCTYPE html>
<html>

<body>
     <form action="" method="post">
        <label for="">Digite um numero:</label>
        <input type="number" name="number">
        <br>
        <input type="submit" name="enviar">
     </form>

     <?php 
     
     $number = $_POST ['number'];
     if( $number %2 == 0){
        echo "<p>numero par: ". $number. "</p>";
     }else echo "<p> numero impar: ". $number. "</p>";
     
     ?>
</body>

</html>