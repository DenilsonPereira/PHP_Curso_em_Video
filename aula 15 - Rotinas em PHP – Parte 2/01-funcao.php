<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Passagem por Referência</title>
</head>
<body>
    <main>
        <?php
            function teste(&$x){
                $x+=2;
                echo "<p>O valor de X é $x</p>";
            }

            $a = 3;
            teste($a);
            echo "<p>O valor de A é $a</p>";
        ?>
    </main>
</body>
</html>