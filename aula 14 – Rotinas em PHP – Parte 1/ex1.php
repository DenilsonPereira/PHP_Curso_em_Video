<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Rotinas</title>
</head>
<body>
    <main>
        <?php
            function soma($a, $b){
                $s = $a+$b;
                echo "<p>A soma vale $s</p>";
            }
            soma(3,4);
            $x = 125;
            $y = 284;
            soma($x,$y);
        ?>
    </main>
</body>
</html>