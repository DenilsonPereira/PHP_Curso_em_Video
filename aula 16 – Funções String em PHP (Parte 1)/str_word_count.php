<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Funções de string</title>
</head>
<body>
    <main>
        <?php
            $frase = "Eu sou estudante de php";
            $cont = str_word_count($frase,2);
            print_r($cont);
        ?>
    </main>
</body>
</html>