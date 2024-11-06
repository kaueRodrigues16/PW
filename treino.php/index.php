
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document1</title>
</head>
<body>
    <?php include 'header.php'; ?>
    <!-- "<"?php include 'nome.php' ?">" iclui arquivos de uma pasta em outra -->
     <br>
     
     
     <form action="index.php" method="post">
    <input type="number" name="n1">
       <br>
    <input type="number" name="n2">
   <br>
    <select name="operacao">
    <option value="somar">somar</option>
    <option value="subtrair">subtrair</option>
    <option value="multiplicar">multiplicar</option>
    <option value="dividir">dividir</option>
</select>
    <br>
    <input type="submit" value="operacao">
</form> 

<?php

$numero1=2;
$numero2=5;

echo ($numero1+$numero2);

?>

h
    
</body>
</html>