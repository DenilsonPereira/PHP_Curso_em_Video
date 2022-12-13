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
                $n = array(2=>"A",5=>"O",8=>"P",0=>"K");
                print_r($n);
                ksort($n);
                print_r($n);
                krsort($n);
                print_r($n);
                //arsort($n);
                //print_r($n);
                //rsort($n);
                //print_r($n);
            ?>
        </pre>
    </main>
</body>
</html>