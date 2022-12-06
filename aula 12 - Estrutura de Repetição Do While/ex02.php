<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Tabuada</title>
</head>
<body>
    <main>
        <?php
            $valor = isset($_GET["num"])?$_GET["num"]:1;

            echo "<h1>Mostrando a tabuada de $valor</h1>";
            $i = 1;
            do{
                $tab = $valor*$i;
                echo "<h3>$valor x $i = $tab</h3>";
                $i++;
            }while($i<=10);
           
        ?>
        <br><p><a href="ex2.php" class="btn">Voltar</a></p>
    </main>
</body>
</html>