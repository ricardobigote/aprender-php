<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprender PHP - Controlo - Exercício 8</title>
</head>
<body>
    <?php
    // Em PHP temos vários tipos de ciclos, que iremos explorar nos próximos
    // exercícios, entre eles:
    // - Ciclo while
    // - Ciclo do..while
    // - Ciclo for
    // - Ciclo foreach
    //
    // O ciclo foreach permite percorrer as posições de um array.
    // Analise o código apresentado a seguir:
    $meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho");
    foreach ($meses as $mes) {
        echo "$mes <br>";
    }

    // Complete o código acima, acrescentando os meses em falta

    
    // Nas linhas abaixo, crie um array $cantores, com uma lista de cantores preferido.
    // Faça um ciclo foreach que apresente os nomes de todos os cantores.


    // Em PHP podemos utilizar arrays associativos, em que cada posição é composta
    // por uma chave e seu valor.
    // Analise o exemplo do array a seguir, de uma lista de alunos e do seu
    // número numa turma, e a forma como apresentar o seu conteúdo
    // $alunos = array("Ana"=>"1", "Bernardo"=>"2", "Vasco"=>"23", "Maria"=>"7");

    // foreach ($alunos as $chave => $valor) {
    //     echo "$chave : $valor <br>";
    // }
    ?>
</body>
</html>