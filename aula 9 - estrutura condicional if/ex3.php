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
    <title>Estrutura IF</title>
</head>
<body>
    <main>
        <?php
            $n1 = isset($_POST["n1"])? $_POST["n1"]: 0;
            $n2 = isset($_POST["n2"])? $_POST["n2"]: 0;
            $media = ($n1+$n2)/2;

            if($media>=0 && $media<5){
                echo "A média entre <strong>".number_format($n1, 1)."</strong> e <strong>".number_format($n2, 1)."</strong> é igual a <strong>".number_format($media, 1)."</strong><br>Situação do aluno: <strong>REPROVADO</strong>";
            }
            elseif($media>=5 && $media<7){
                echo "A média entre <strong>".number_format($n1, 1)."</strong> e <strong>".number_format($n2, 1)."</strong> é igual a <strong>".number_format($media, 1)."</strong><br>Situação do aluno: <strong>RECUPERAÇÃO</strong>";
            }
            else{
                echo "A média entre <strong>".number_format($n1, 1)."</strong> e <strong>".number_format($n2, 1)."</strong> é igual a <strong>".number_format($media, 1)."</strong><br>Situação do aluno: <strong>APROVADO</strong>";
            }
        ?>
        <br><br><a href="exercicio3.html" class="btn">Voltar</a>
    </main>
</body>
</html>