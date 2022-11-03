<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
            $txt = isset($_GET["t"])?$_GET["t"]:"Texto genérico"; 
            $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
            $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>
    <link rel="stylesheet" href="../style.css">
    <title>Exercício 3</title>
    <style>
        span.texto{
            font-size: <?php echo $tam;?>;
            color: <?php echo $cor;?>;
        }
    </style>
</head>
<body>
    <main>
        <?php
            echo "<span class='texto'>$txt</span>";
        ?>
        <a href="exercicio3.html" class="btn">Voltar</a>
    </main>
</body>
</html>