<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <style>
        strong{
            color: darkred;
        }
    </style>
    <title>É primo?</title>
</head>
<body>
    <main>
        <?php
            $num = isset($_GET['num'])?$_GET['num']:0;
            $divisores = 0;
            echo "<h2>Analisando o número $num...</h2>";
            
            for($i=1;$i<=$num;$i++){
                if(($num%$i) == 0){
                    $divisores+=1;
                    $gerador = "v$divisores";
                    $$gerador = $i;
                }
            }
            echo "Valores múltiplos: ";
            for($i=1;$i<=$divisores;$i++){
                $gerador = "v$i";
                echo $$gerador." ";
            }
            echo "<br/>";

            echo "Total de múltiplos: $divisores<br/>";
            if($divisores>2){
                echo "Resultado: $num <strong>NÃO É PRIMO</strong>";
            }else{
                echo "Resultado: $num <strong>É PRIMO</strong>";
            }
            echo "<br/>";
        ?>
        <p><br><a href="ex03.php" class="btn">Voltar</a></p>
    </main>
</body>
</html>