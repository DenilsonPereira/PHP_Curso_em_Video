<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <style>
        b{
            color: #B22222;
        }
    </style>
    <title>Aula 10</title>
</head>
<body>
    <main>
        <?php
            $est = $_GET["estado"];

            switch ($est){
                case 1:
                case 3:
                case 4:
                case 14:
                case 22:
                case 23:
                case 27:
                    echo "Você mora na <b>Região Norte</b>";
                    break;
                case 2:
                case 5:
                case 6:
                case 10:
                case 15:
                case 17:
                case 18:
                case 20:
                case 26:
                    echo "Você mora na <b>Região Nordeste</b>";
                    break;
                case 7:
                case 9:
                case 11:
                case 12:
                    echo "Você mora na <b>Região Centro-Oeste</b>";
                    break;
                case 8:
                case 13:
                case 19:
                case 25:
                    echo "Você mora na <b>Região Sudeste</b>";
                    break;
                case 16:
                case 21:
                case 24:
                    echo "Você mora na <b>Região Sul</b>";
                    break;
            }
        ?>

        <br><br><a href="ex03.html" class="btn">Voltar</a>
    </main>
</body>
</html>