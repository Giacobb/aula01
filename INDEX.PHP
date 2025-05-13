<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula01</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Aula 001 de Php </h1>
    <hr>
    <?php
    echo "<h2>Varíavel</h2>";
    echo $nome = "Nome: " . "Felipe" . "<br>";
    echo $idade = "Idade: " . 19 . "<br>";
    echo $fumante = "Fumante: ";
 
    if($fumante==true){
        echo "sim";
    }
    else{
        echo "não";
    }
    ?>
    
</body>
</html>