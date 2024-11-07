
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
     
     
     <form action="index.php" method="get">
    <input type="number" name="number1" required>
       <br>
    <input type="number" name="number2" required>
  
    <br>
    <select name="operação" required>
        <option value="somar">somar</option>
        <option value="subtrair">subtrair</option>
        <option value="dividir">dividir</option>
        <option value="multiplicar">multiplicar</option>
</select>
    <input type="submit">
</form> 

Answer: <?php
if (isset($_GET["number1"]) && isset($_GET["number2"]) && isset($_GET["operação"])) {
   
    $number1 = $_GET["number1"];
    $number2 = $_GET["number2"];
    $operação = $_GET["operação"];
    
    switch ($operação) {
        case "somar":
            echo $number1 + $number2;
            break;
        case "subtrair":
            echo $number1 - $number2;
            break;
        case "dividir":
            if ($number2 != 0) {
                echo $number1 / $number2;
            } else {
                echo "Erro: Divisão por zero!";
            }
            break;
        case "multiplicar":
            echo $number1 * $number2;
            break;
        default:
            echo "Operação inválida.";
    }
} else {
    echo "Por favor, insira ambos os números e selecione uma operação.";
}
?>

<!-- pelo que entendi o "echo" funciona com oum "sysout"-->



<br>

<a href="https://www.youtube.com/watch?v=AEM3ssmyFMo">video</a>
    
</body>
</html>