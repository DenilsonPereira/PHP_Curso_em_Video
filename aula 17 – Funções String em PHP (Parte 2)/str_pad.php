<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Funções String</title>
</head>
<body>
    <main>
        <?php
            $nome = "Pereira";
            $novo = str_pad($nome,30,"_",STR_PAD_BOTH);

            echo "Meu sobrenome é $novo, gostou";
        ?>
    </main>
</body>
</html>