<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de Incremento</title>
</head>
<body>
    <h3>Mostra qual foi o ano anterior ao ano atual.</h3>
    <?php
        $atual = $_GET["aa"];// Essa linha vai pegar o ano na URL

        echo "O ano atual é $atual e o ano interior é ". --$atual;

        $c = 5; 

        echo "<br>Testando C é $c e C + 1 é ". ++$c;
    ?>
</body>
</html>