<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprender PHP - Controlo - Exercício 2</title>
</head>
<body>
    <?php
    // Se pretendemos comparar valores, deveremos utilizar os
    // operadores adequados ao efeito.
    // No exemplo a seguir, as mensagens apenas aparecerão se
    // a variável $password tiver a palavra certa.
    // Corrija a linha 29 de modo a aparecerem as mensagens. 
    $password = "querty";
    if ($password == "Escola!") {
        echo "Acesso concedido.<br>";
        echo "Bem vindo Mestre!";
    }

    // Os operadores de comparação em PHP são apresentados abaixo
    // Operador 	Nome
    // ==           Igual
    // ===          Idêntico
    // !=           Diferente
    // <>           Diferente
    // !==          Não idêntico
    // > 	        Maior do que
    // <            Menor do que
    // >=           Maior ou igual a
    // <= 	        Menor ou igual a

    // No exemplo a seguir, apenas vamos à escolha se não 
    // estivermos doentes.
    // Corrija o valor atribuído à variável de modo a irmos à escola.
    $doente = TRUE;
    if (!$doente) {
        echo "Vamos à escola!";
    }

    // Os operadores lógicos em PHP são apresentados abaixo
    // Operador 	Nome
    // and          e
    // &&           e
    // or           ou
    // ||           ou
    // xor          ou exclusivo
    // !            negação

    // No exemplo a seguir, apenas iremos à praia se estiver
    // sol e não estivermos a trabalhar
    // Corrija os valores nas variável $tempo e $trabalho de
    // modo a podermos ir à praia
    $tempo = "chuva";   // Pode assumir o valor "chuva" ou "sol"
    $trabalho = TRUE;   // Pode assumir o valor TRUE ou FALSE
    if ($tempo == "sol" and !$trabalho) {
        echo "Vamos a la playa, oh, oh, oh, oh, oh!";
    }

    ?>
</body>
</html>