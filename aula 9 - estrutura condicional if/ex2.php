<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Estrutura IF</title>
</head>
<body>
    <main>
        <?php
            $ano = isset($_GET["ano"])? $_GET["ano"]: 1900;
            $idade = date("Y") - $ano;

            if($idade<16){
                echo "Você tem $idade anos, e você <strong>NÃO PODE VOTAR</strong>";
            }
            elseif($idade>=16 && $idade<18 || $idade>=70){
                 echo "Você tem $idade anos, e seu voto é <strong>OPCIONAL</strong>";
            }
            else{
                 echo "Você tem $idade anos, e seu voto é <strong>OBRIGATÓRIO</strong>";
            }
        ?>
        <br><br><a href="exercicio2.html" class="btn">Voltar</a>
    </main>
</body>
</html>