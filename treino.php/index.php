
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
    <input type="number" name="number1">
       <br>
    <input type="number" name="number2">
  
    <br>
    <input type="submit">
</form> 

Answer: <?php
if (isset($_GET["number1"]) && isset($_GET["number2"])) {
    echo $_GET["number1"] + $_GET["number2"];
} else {
    echo "Please enter both numbers.";
}
?>
<!-- pelo que entendi o "echo" funciona com oum "sysout"-->



<br>

<a href="https://www.youtube.com/watch?v=AEM3ssmyFMo">video</a>
    
</body>
</html>