<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprender PHP - Exercício 3</title>
</head>
<body>
    <?php
    // Para juntar criar uma variável usa-se o
    // símbolo $ seguido de uma palavra:
    $animal = "Gato";

    // Mostra uma frase com a variável $animal
    echo "O animal é um " . $animal;

    // Esta é outra variável do tipo string
    $objeto = "Chapéu";
    $objeto .= " grande";       // Acrescenta a palavra à string (concatenação)
    $objeto_antigo = $objeto;
    $objeto = "Botas";

    // Mostra uma frase com a variável $objeto
    echo "<br><br>O objeto é " . $objeto;
    echo "<br>O objeto antigo era " . $objeto_antigo;

    // Esta é uma variável do tipo inteiro
    $idade = "16";

    // Esta é uma variável do tipo float
    $altura = 1.8;

    // Esta é uma variável do tipo booleano
    $vivo = TRUE;

    // O PHP consegue identificar variáveis no meio de uma string
    // Remova o comentário da linha a seguir e teste. Para que servem as {}?
    // echo "<br><br>Eu tenho um $animal que come muito! Tanto que com $idade anos e {$altura}m de altura já não cabe nas $objeto!";

    // Remova o comentário da linha a seguir e altere-a de modo a
    // concatenar as várias variáveis acima para construir uma frase.
    // echo "<br><br>O ";

    // Na linha abaixo é criado um array com 3 entradas
    // descomente a linha seguinte para ver qual é o output
    $animais = array("Cão","Gato","Peixe");
    //var_dump($animais);

    // Porque razão a primeira posição do array tem 4 caracteres?!
    // Altere a primeira string (Cão) de modo a perceber porquê.

    // Abaixo atribuímos a uma variável um valor por referência
    // Neste exemplo, a variável $nosso_animal tem por referência
    // a variável $animal.
    // Descomente a linha do echo e teste o resultado
    $nosso_animal =& $animal;
    $nosso_animal = "Cão";
    //echo "<br><br>Eu tenho um $animal";
    ?>
</body>
</html>