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
            function soma($a,$b){
                $s = $a+$b;
                return $s;
            }

            $x = 5;
            $y = 6;

            $r = soma($x, $y);

            echo "<p>A soma entre $x+$y = $r</p>";
        ?>
    </main>
</body>
</html>