<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Fatorial</title>
</head>
<body>
    <main>
        <?php
            $valor = isset($_GET["val"])?$_GET["val"]:1;

            echo "<h1>Calcular o fatorial de $valor</h1>";
            $c = $valor;
            $fat = 1;
            do{
                $fat = $fat*$c;
                $c--;
            }while($c>=1);
            echo "<h2>$valor! = $fat</h2>"
        ?>
        <p><a href="ex01.html" class="btn">Voltar</a></p>
    </main>
</body>
</html>