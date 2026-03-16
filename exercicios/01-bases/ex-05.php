<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprender PHP - Exercício 5</title>
</head>
<body>
    <?php
    // O PHP disponibiliza um operador para a exponenciação
    // Analise a saída de cada um dos comandos a seguir
    echo 2 ** 3;            // Representa 2 ao cubo
    echo 4.6 ** 2;          // Representa 4.6 ao quadrado
    echo 10 ** -1;          // Representa 10x10 exponente -1
    

    // A função Módulo - Resto da divisão inteira
    // Analise a saída de cada um dos comandos a seguir
    echo 7 % 2;         // Representa o resto da divisão de 7 por 2

    $gomas = 54;
    $amigos = 7;
    $restos = $gomas % $amigos;
    echo "\n\nSobras de gomas: " . $restos;

    
    ?>
</body>
</html>