<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Funções de string</title>
</head>
<body>
    <main>
        <?php
            $txt = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam dolore obcaecati perspiciatis autem consectetur molestias necessitatibus rerum reprehenderit quaerat eius maiores debitis provident quidem placeat a, dolorem cumque nisi consequuntur!";
            $res = wordwrap($txt, 10, "<br>\n",false);
            echo ($res);
        ?>
    </main>
</body>
</html>