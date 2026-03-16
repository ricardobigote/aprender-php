<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprender PHP - Exercício 4</title>
</head>
<body>
    <?php
    // O PHP disponibiliza vários operadores, entre eles:
    //  +    Adição
    //  -    Subtração
    //  *    Multiplicação
    //  /    Divisão

    // Teste e analise a saída de cada um dos comandos a seguir
    echo 3 + 1;
    echo 4.6 + 1.3;
    echo 198263 - 263;
    echo -22.8 - 19.1;

    $num1 = 7;
    $num2 = 3;
    $result = $num1 - $num2;
    echo $result;

    echo $num1 + 1;
    echo $num1;

    $num1 = $num1 + 1;
    echo $num1;


    // DESAFIO #########################
    // Calcule e depois apresente a $diferenca
    $peso_anterior = 75.3;
    $peso_atual = 77.4;
    //$diferenca = 
    // echo "\n\nA diferença de peso é: ".


    // Analise a saída de cada um dos comandos a seguir
    $gomas = 54;
    $amigos = 7;
    $gomas_por_amigo = $gomas / $amigos;
    echo "\n\nGomas por amigo: " . $gomas_por_amigo;

    
    // DESAFIO #########################
    // Complete a formula para cálculo do
    // Índice de Massa Corporal e apresente o resultado
    // $IMC = 
    // echo "...

    ?>
</body>
</html>