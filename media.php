<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Média</title>
</head>
<body>
    <main>
        <?php
            $p1 = $_GET["a"];
            $p2 = $_GET["b"];
            $media = ($p1+$p2)/2;
            $sit = $media>7&$media<10? "aprovado":"reprovado";

            echo "Com as notas $p1 e $p2, o aluno está $sit e sua média é $media</br>";
            echo "Usando o unário no echo: ".($media>7&&$media<=10? "aprovado":"reprovado");
        ?>
    </main>
</body>
</html>