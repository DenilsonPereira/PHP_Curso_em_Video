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
            $vetor[0] = "curso";
            $vetor[1] = "em";
            $vetor[2] = "video";
            $texto = implode(" ", $vetor);

            print($texto);
        ?>
    </main>
</body>
</html>