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
        <form action="ex02-parte2.php" method="get">
            <?php
                $c=1;
                while($c<=5){
                    echo "<label for='inum'>Valor $c:</label>
                    <input type='number' name='v$c' id='inum' max='100' min='0' value='0'/><br/>";
                    $c++;
                }
            ?>
            <input type="submit" value="Enviar" class="btn">
        </form>
   </main> 
</body>
</html>