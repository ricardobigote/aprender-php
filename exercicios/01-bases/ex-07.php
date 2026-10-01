<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprender PHP - Exercício 7</title>
</head>
<body>
    <?php
    // Fazer "cast" a uma variavel dá ao programador um
    // maior controlo sobre o tipo de dados de uma variável

    // Nos exemplos abaixo temos variáveis de vários tipos de dados
    $a = 7;       // Inteiro
    $b = 10.4;    // Float
    $c = "Olá"; // String
    $d = true;    // Booleano
    $e = NULL;    // NULLO
    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump($e);

    // Para fazer o "cast", colocamos o tipo de dados desejado entre
    // parêntises antes da variável
    $a = (string) $a;
    $b = (string) $b;
    $c = (string) $c;
    $d = (string) $d;
    $e = (string) $e;

    // Descomente as linhas abaixo para verificar o tipo de dados
    // var_dump($a);
    // var_dump($b);
    // var_dump($c);
    // var_dump($d);
    // var_dump($e);
    ?>
</body>
</html>