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
            $nome ="   José da Silva   ";
            echo(strlen($nome));
            print("<br>");
            $novo = trim($nome);
            echo ($novo);
            print("<br>");
            echo(strlen($novo));
        ?>
    </main>
</body>
</html>