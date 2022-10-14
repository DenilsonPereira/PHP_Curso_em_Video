<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
        }
        p{
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <?php
        $idade = 41;
        $nome = (string) "Gustavo";//Typecast

        echo "<p>$nome tem $idade anos!</p>";

        $foo = 'Bob';
        $bar = &$foo;
        $bar = "My name is $bar";

        echo $bar;
        echo "<br>";
        echo $foo;
        echo "<br>";

        //Limpa e remove referência
        var_dump($unset_var);

        echo "<br>";

        //Uso de booleano
        $unset_bool = false;
        echo ($unset_bool ? "true" : "false");
        echo "<br>";
        
        //Uso de string
        $unset_str = 'abc';
        var_dump($unset_str);
        echo "<br>";

        //Uso de inteiro
        $unset_int += 25;
        var_dump($unset_int);
        echo "<br>";

        //Uso de float
        $unset_float += 1.55;
        var_dump($unset_float);
        echo "<br>";

        //Uso de array
        $unset_arr[3]= "def";
        var_dump($unset_arr);
        echo "<br>";
    ?>
</body>
</html>