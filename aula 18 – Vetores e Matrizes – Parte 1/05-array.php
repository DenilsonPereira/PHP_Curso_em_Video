<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Array</title>
</head>
<body>
    <main>
        <pre>
            <?php
                $cad = array("nome"=>"Ana","idade"=>23,"peso"=>78.5);
                $cad["fuma"]=true;
                foreach($cad as $campo=>$valor){
                    echo "O valor do $campo é $valor<br>";
                }
            ?>
        </pre>
    </main>
</body>
</html>