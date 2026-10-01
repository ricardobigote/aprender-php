<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprender PHP - Exercício 6</title>
</head>
<body>
    <?php
    // Em programação é muito comum atribuirmos um novo valor
    // a uma variável, incrementando-o (ou decrementando) ao valor antigo
    // Analise a saída de cada um dos comandos a seguir
    $mealheiro = 430;
    $despesa_jogo = 52;
    $mealheiro = $mealheiro - $despesa_jogo;
    echo $mealheiro;

    // Verifica que no mealheiro foram removidos 52 euros! 


    // O PHP disponibiliza um operador para esta operação

    // Operação:    Sintaxe:        Sintaxe abreviada:
    // Adicionar    $x = $x + $y	$x += $y
    // Subtrair     $x = $x - $y    $x -= $y
    // Multiplicar 	$x = $x * $y 	$x *= $y
    // Dividir      $x = $x / $y 	$x /= $y
    // Mod          $x = $x % $y 	$x %= $y

    // Usando a sintaxe abraviada, altera a linha 34
    // e descomente a linha 35
    $mealheiro = 430;
    $despesa_jogo = 52;
    $mealheiro = $mealheiro - $despesa_jogo;
    // echo $mealheiro;
 
    // Também podemos usar em variáveis contadoras
    // Descomente a linha 41 para ver o resultado
    $i = 1;
    $i += 1;
    // echo $i;

    // E se, no valor a incrementar, em vez de usarmos o numero
    // inteiro "1", usarmos o número 2?
    // Descomente a linha 48
    $j = 1;
    $j += 2;
    // echo $j;

    // Complete os exemplos abaixo, usando a mesma sintaxe abreviada
    // de acordo com o solicitado à direita de cada linha
    // Descomente as linhas para verificar o resultado
    // $a = $b = $c = 4;
    // $a      // Atribua a $a o valor dele multiplicado por 2
    // $b      // Atribua a $b o valor dele subtraido de 2
    // $c      // Atribua a $c o valor dele dividido por 2
    // echo $a;
    // echo $b;
    // echo $c;
    ?>
</body>
</html>