<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprender PHP - Controlo - Exercício 3</title>
</head>
<body>
    <?php
    // Com a estrutura if..else, poderemos executar um determinado
    // código se a condição for verdadeira e outro se não for.
    // Altere o valor atribuído à variável $hora para testar.
    $hora = 10;
    if ($hora < 12) {
        echo "Bom dia!";
    } else {
        echo "Boa tarde!";
    }

    // Na verdade, o exemplo acima está incompleto pois falta a saudação
    // relativa às horas da noite. Podemos resolvar com um "elseif"
    // Descomente as linhas abaixo para testar.
    // $hora = 10;
    // if ($hora < 12) {
    //     echo "Tenha um excelente Bom dia!";
    // } elseif ($hora < 19) {
    //     echo "Boa tarde!";
    // } else {
    //     echo "Boa noite!";
    // }

    // Imagine um sistema que calcula o Índice de Massa Corporal
    // Descomente e complete o código abaixo de modo a fazer o cálculo,
    // apresentar o resultado e uma informação descritiva de acordo com:
    // IMC < 18,4 - Abaixo do peso.
    // IMC entre 18,4 e 24,9 - Peso ideal.
    // IMC entre 25 e 29,9 - Acima do peso ideal.
    // IMC entre 30 e 34,9 - Obesidade de nível 1.
    // IMC entre 35 e 39,9 - Obesidade de nível 2.
    // IMC maior do que 40 - Risco de vida.
    // $peso = 70;     // peso em kg
    // $altura = 178;  // altura em centímetros
    // $IMC = ...      // complete o cálculo
    // echo "<br><br>IMC = " . $IMC;
    // if ($IMC < 18.4) {
    //     echo "<br>Abaixo do peso.";
    // } elseif (...) {
    //     // continue...
    // }
    ?>
</body>
</html>