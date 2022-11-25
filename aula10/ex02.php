<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Aula 10</title>
</head>
<body>
    <main>
        <?php
            $d = $_GET["dia"];
            switch ($d){
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Hoje é dia de ir para a escola";
                    break;
                case 7:
                case 8:
                    echo "Hoje não é dia de ir para a escola";
                    break;
                default:
                    echo "Dia inválido";
            }
        ?>
        <br><br><a href="ex02.html" class="btn">Voltar</a>
    </main>
</body>
</html>