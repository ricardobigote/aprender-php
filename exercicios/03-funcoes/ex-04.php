<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprender PHP - Funções - Exercício 4</title>
</head>
<body>
    <?php
    // O PHP tem mais de 1000 funções já incluídas.
    // Nos próximos exercícios iremos explorar algumas delas.

    // Funções para manipulação de strings:

    // A função strlen() conta o número de caracteres de uma string
    $nome = "António Silva";
    $num_caracteres = strlen($nome);
    echo "A string \"$nome\" tem $num_caracteres caracteres.";

    // Utilize a função strlen() para saber quantos caracteres tem a
    // sting seguinte e apresente o resultado:
    $frase_passe = "Esta é uma palavra passe 124% segura!";



    // A função strtoupper() coloca as letras de uma string em maiúsculas
    // A função strtolower() coloca as letras de uma string em minúsculas
    // Utilize a função adequada para colocar as letras da sting seguinte
    // em maiúsculas e apresente o resultado:
    $frase = "Por favor vai fazer os trabalhos de casa!";



    // Utilize a função adequada para colocar as letras da sting seguinte
    // em minúsculas e apresente o resultado:
    $afirmacao = "VAMOS TODOS TRABALHAR.";



    // A função str_replace() substitui uma parte de uma string
    // Sintaxe: str_replace(encontrar,substituir,string,contar)
    // - encontrar: a string a ser substituida;
    // - substituir: a string a ser usada na substituição;
    // - string: a string original;
    // - contar: parâmetro opcional para variável que conta o nº de substituições.
    // Devolve a string alterada.
 
    // Descomente o exemplo a seguir e teste.
    // $cancao = "Atirei o pau ao elefante.";
    // $cancao = str_replace("elefante", "gato", $cancao, $substituicoes);
    // echo "<br>A frase ficou \"$cancao\" e foram feitas $substituicoes substituições.";


    // A função substr() devolve uma parte de uma string
    // Sintaxe: substr(string,início,comprimento)
    // - string: a string original;
    // - início: posição do primeiro caracter a devolver;
    // - comprimento: tamanho da string a devolver.
    // Devolve a string alterada.

    // Descomente o exemplo a seguir e teste.
    // $poema = "Batem leve, levemente, como quem chama por mim.";
    // $poema = substr($poema, 28, 18);
    // echo "<br>$poema";


    // A função trim() devolve uma string sem: espaços, tabulações, mudanças de linha e NULL
    // Alternativamente também pode ser usada para remover outros caracteres
    // Sintaxe: trim(string,lista de caracteres)
    // - string: a string original;
    // - lista de caracteres: parâmetro opcional onde se indica o caracter a remover.
    // Devolve a string alterada.

    // Descomente o exemplo a seguir e teste.
    // $musica = " Só um beijo. ";
    // $musica = trim($musica);
    // echo "<br>A música chama-se: \"$musica\".<br>";


    // A função explode() divide uma string num array, tendo como base num caracter "separador"
    // Sintaxe: explode(separador,string,limite)
    // - separador: o caracter utilizado como marcador da divisão;
    // - string: a string original;
    // - limite: parâmetro opcional onde se indica o número de posições do array.
    // Devolve o array.

    // Descomente o exemplo a seguir e teste.
    // $dito = "Já disse que NÃO!";
    // $dito = explode(" ", $dito);
    // var_dump($dito);


    // A função implode() faz o inverso da função explode(), aceita um array e converte-o para string
    // Sintaxe: implode(separador,array)
    // - separador: o caracter utilizado como marcador da divisão;
    // - array: o array a unir usando o separador.
    // Devolve uma string.

    // Descomente o exemplo a seguir e teste.
    // $ipsisverbis = array('O','que','não','mata','engorda!');
    // $dizer = implode(" ", $ipsisverbis);
    // echo "<br>$dizer";
    // echo "<br>$dizer[23]";  // Sim, também podemos tratar uma string como um array!


    // Usando as funções abordadas acima, faça uma limpesa à string seguinte:
    // - Remova todos os caracteres indesejados;
    // - Substitua a { e } por ( e );
    // - Inicie a cada frase em maiúscula;
    // - Termine a frase com apenas um ponto final;
    // - Todas as palavras devem ser separadas por um espaço.
    // Não utilize ciclos.
    // Calcule o número de palavras.
    // Nota: descomente as linhas abaixo mas NÃO altere a linha seguinte!
    // $historia = "brites%de%Almeida,%a%Padeira%de%Aljubarrota,%foi%uma%figura%lendária%e%" .
    // "heroína%portuguesa,%cujo%nome%anda%associado%à%vitória%dos%portugueses,%contra%as%" . 
    // "forças%castelhanas,%na%batalha%de%Aljubarrota%{1385}.%Com%a%sua%pá%de%padeira,%" . 
    // "teria%matado%sete%castelhanos%que%encontrara%escondidos%num%forno...";
    // // Escreva aqui o seu código:

    // $num_palavras = 0;  // Corrija esta linha com o cálculo correto
    // echo "<br>$historia";
    // echo "<br>O número de palavras é: $num_palavras";
    ?>
</body>
</html>