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
            $v = isset($_GET['sel'])?$_GET['sel']:1;
            for($i=1;$i<=10;$i++){
                $tab = $v*$i;
                echo "$v x $i = $tab<br/>";
            }
            echo "<br/>";
        ?>
        <p><a href="javascript:history.go(-1)" class="btn">Voltar</a></p>
    </main>
</body>
</html>