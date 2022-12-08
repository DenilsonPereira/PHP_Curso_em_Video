<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Contagens</title>
</head>
<body>
    <main>
        <?php
            for($i=1;$i<=10;$i++){
                echo "$i ";
            }
            echo "<br/>";
            for($i=10;$i>=1;$i--){
                echo "$i ";
            }
            echo "<br/>";
            for($i=1;$i<=20;$i+=2){
                echo "$i ";
            }
            echo "<br/>";
            for($i=20;$i>=0;$i-=4){
                echo "$i ";
            }
        ?>
    </main>
</body>
</html>