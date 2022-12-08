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
        <form action="02tabuada.php" method="get">
            <label for="sel">Selecione um número: </label>
            <select name="sel" id="sel">
                <?php
                    for($i=1;$i<=10;$i++){
                    echo "<option>$i</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Tabuada" class="btn">
        </form>
    </main>
</body>
</html>