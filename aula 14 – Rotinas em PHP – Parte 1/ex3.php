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
            $res = soma(5, 4, 3, 8, 1, 9, 2);

            function soma(...$p){
                $tot = func_num_args();
                $s=0;
                for($i=0;$i<$tot;$i++){
                    $s+=$p[$i];
                }
                return $s;
            }

            echo "A soma dos valores é $res";
        ?>
    </main>
</body>
</html>