<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprender PHP - Controlo - Exercício 1</title>
</head>
<body>
    <?php
    // As estruturas condicionais permitem executar diferentes
    // ações com base numa determinada condição
    if (2>1) {
        echo "O número 2 é maior do que o 1!";
    }

    // No exemplo abaixo é apresentada uma saudação apenas quando
    // a hora é da parte da tarde do dia
    // Altere o valor da hora para testar
    $hora = 10;
    if ($hora>12) {
        echo "Boa tarde caro senhor!";
    }

    ?>
</body>
</html>