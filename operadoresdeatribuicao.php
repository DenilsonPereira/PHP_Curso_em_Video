<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Atribuição</title>
</head>
<body>
    <?php
        echo "<h2>Aplicar 10% de acréscimo ao preço de um produto.</h2>";

        $preco = $_GET["p"];
        echo "O preço do produto é R$ ". number_format($preco, 2, ",", ".");
        $preco += ($preco*10/100);
        echo "<br>E o novo preço com 10% de aumento será R$ ". number_format($preco, 2, ",", ".");

        echo "<h2>Aplicando 10% de desconto ao preço de um produto.</h2>";

        $preco = $_GET["p"];
        echo "O preço do produto é R$ ". number_format($preco, 2, ",", ".");
        $preco -= ($preco*10/100);
        echo "<br>E o novo preço com 10% de desconto será R$ ". number_format($preco, 2, ",", ".");
    ?>
</body>
</html>