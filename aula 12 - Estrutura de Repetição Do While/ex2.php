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
        <h2>Tabuada</h2>
        <form action="ex02.php" method="get">
            <label for="val">Número:</label>
            <select name="num" id="val">
                <?php
                    $c=1;
                    while($c<=10){
                        echo "<option value='$c'>$c</option>";
                        $c++;
                    }
                ?>
            </select>
            <input type="submit" value="Tabuada" class="btn">
        </form>
    </main>
</body>
</html>