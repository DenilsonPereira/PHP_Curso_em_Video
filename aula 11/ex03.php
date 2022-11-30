<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Exercício 3</title>
</head>
<body>
    <main>
        <?php
            $i = isset($_GET['ini'])?$_GET['ini']:0;
            $f = isset($_GET['fim'])?$_GET['fim']:0;
            $p = isset($_GET['pulo'])?$_GET['pulo']:1;

            if($i<$f){
                while($i<=$f){
                    echo $i." ";
                    $i +=$p;
                }
            }else{
                while($i>=$f){
                    echo $i." ";
                    $i -=$p;
                }
            }

        ?>
        <br/><br/><a href="ex03.html" class="btn">Voltar</a>
    </main>
</body>
</html>