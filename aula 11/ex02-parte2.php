<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Curso PHP</title>
</head>
<body>
   <main>
        <?php
            $i = 1;
            while($i<=5){
                $v = "num".$i;
                $url = "v".$i;
                $$v = isset($_GET[$url])?$_GET[$url]:0;
                echo "Valor $i : ".$$v."<br/>";
                $i++;
            }
        ?>
   </main> 
</body>
</html>