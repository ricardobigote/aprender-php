<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprender PHP - Funções - Exercício 2</title>
</head>
<body>
    <?php
    // As funções podem aceitar parâmetros de entrada como no exemplo a seguir.
    function cumprimenta($nome) {
        echo "Olá Mundo $nome !!!<br>";
    }
    cumprimenta("Ana");

    // O exemplo a seguir a função aceita dois parâmetros de entrada.
    // Descomente e altere as variáveis para o seu caso.
    // function cumprimentaIdade($nome, $idade) {
    //     echo "Olá Mundo $nome !!! Tens $idade anos.<br>";
    // }
    // cumprimentaIdade("Ana",17);

    // O exemplo a seguir o parâmetro tem um valor por defeito "Pessoa"
    // Descomente, teste e só depois tente atribuir um valor à variável.
    //
    // function cumprimentaDefeito($novo_nome = "Pessoa") {
    //     echo "Olá Mundo $novo_nome !!!<br>";
    // }
    // cumprimentaDefeito();
    ?>
</body>
</html>