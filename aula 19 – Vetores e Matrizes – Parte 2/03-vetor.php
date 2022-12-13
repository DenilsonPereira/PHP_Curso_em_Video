<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Aula 2 - Array e Matrizes</title>
</head>
<body>
    <main>
        <pre>
            <?php
                $n = array("A","O","P","K");
                print_r($n);
                array_push($n,"Q");
                print_r($n);

                $v = array(1,5,2,1,0,4);
                print_r($v);
                array_pop($v);
                print_r($v);
            ?>
        </pre>
    </main>
</body>
</html>