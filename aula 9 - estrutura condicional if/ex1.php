<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Estrutura IF</title>
</head>
<body>
    <main>
        <?php
            $ano = isset($_GET["ano"])? $_GET["ano"]: 1900;
            $idade = date("Y") - $ano;

            if($idade>=18){
                echo "Você tem $idade anos, e pode <strong>VOTAR</strong> e <strong>DIRIGIR</strong>";
            }
            else{
                echo "Você tem $idade anos, e portanto não pode <strong>VOTAR</strong> nem <strong>DIRIGIR</strong>";
            }

        ?>
        <br><br><a href="exercicio1.html" class="btn">Voltar</a>
    </main>
</body>
</html>