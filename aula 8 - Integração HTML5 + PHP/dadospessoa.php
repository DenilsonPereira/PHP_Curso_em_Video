<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Pessoa</title>
</head>
<body>
    <main>
        <?php
            $nome = isset($_POST["nome"])?$_POST["nome"]:"Não foi informado";
            $ano = isset($_POST["ano"])?$_POST["ano"]:0;
            $sexo = isset($_POST["sexo"])?$_POST["sexo"]:"Não foi informado";
            $idade = date("Y") - $ano;

            echo "<strong>Nome:</strong> $nome <br> <strong>Ano de nascimento:</strong> $ano <br> <strong>Sexo:</strong> $sexo <br> <strong>Idade:</strong> $idade";
        ?>
    </main>
</body>
</html>