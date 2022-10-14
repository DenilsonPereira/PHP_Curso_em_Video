<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
</head>
<body>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];

        echo "<h2>Valores recebidos: $n1 e $n2</h2>";

        $media = ($n1+$n2)/2;

        echo "A soma entre $n1 e $n2  é igual a ". ($n1+$n2);

        echo "<br>A subtração entre $n1 e $n2 é ".($n1-$n2);

        echo "<br>A multiplicação entre $n1 e $n2 é ".($n1*$n2);

        echo "<br>A divisão entre $n1 e $n2 é ".($n1/$n2);

        echo "<br>O módulo(resto da divisão) entre $n1 e $n2 é ".($n1%$n2);
        
        echo "<br> A média vale $media";
    ?>
</body>
</html>