<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Array</title>
</head>
<body>
    <main>
        <pre>
            <table border="1"><tr>
                <?php
                    $c = range(5,20,5);
                    foreach($c as $v){
                        echo "<td>$v ";
                    }
                ?>
            </table>
        </pre>
    </main>
</body>
</html>