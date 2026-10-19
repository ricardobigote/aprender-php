<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprender PHP - Funções - Exercício 3</title>
</head>
<body>
    <?php
    // As funções também podem devolver um determinado valor, tal como 
    // no exemplo a seguir que devolve o valor contido na variável $z.
    function soma($x, $y) {
        $z = $x + $y;
        return $z;
    }

    echo "1 + 2 = " . soma(1, 2) . "<br>";
    echo "19 + 11 = " . soma(19, 11) . "<br>";
    echo "122 + 1 = " . soma(122, 1);

    // Nas linhas abaixo crie as funções que operam sobre dois números:
    // - subtrai
    // - multiplica
    // - divide
    // Depois acrescenta 3 chamadas a cada uma das funções.

    ?>
</body>
</html>