<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprender PHP - Funções - Exercício 5</title>
</head>
<body>
    <?php
    // A função time() formata uma data e hora e devolve uma string com a data
    // formatada.
    // A sintaxe é:
    // date(formato, carimbo de data/hora)
    // - formato: string com caractéres pré definidos (lista mais abaixo)
    // - carimbo de data/hora
    // Analise os seguintes exemplos de utilização:
    echo date("Y-m-d");
    echo "<br>";
    echo date("h:i:sa");
    echo "<br>";
    echo date("H:i:s");
    echo "<br>";
    echo date("m");
    echo "<br>";
    echo date("M");
    echo "<br><br>";

    // A função time() devolve o tempo atual em número de segundos (carimbo de data/hora)
    // desde a Época Unix (1 de janeiro de 1970 00:00:00 GMT).
    // Descomente e teste o exemplo a seguir:
    // $tempo = time();
    // echo "Timestamp: " . $tempo;
    // echo "<br>";
    // echo date("Y-m-d",$tempo);
    // echo "<br><br>";

    // A função mktime() devolve o tempo, em número de segundos (carimbo de data/hora),
    // de uma determinada data fornecida.
    // Sintaxe:
    // mktime(hora, minuto, segundo, mês, dia, ano)
    // Descomente, analise o seguinte exemplo e altere os parâmetros de entrada:
    // $ts = mktime(0,0,0,10,3,1975);
    // echo date("Y-m-d H:i:s", $ts);
    // echo "<br><br>";

    // Para formatar a data, usam-se os seguintes caracteres:
    // d - O dia do mês (de 01 a 31)
    // D - Representação textual curta do dia (três letras)
    // j - O dia do mês sem zeros à esquerda (1 a 31)
    // l (letra minúscula 'L') - Representação textual completa do dia
    // N - Representação numérica ISO-8601 do dia da semana (1 para segunda-feira, 7 para domingo)
    // S - Sufixo ordinal inglês para o dia do mês (2 caracteres: st, nd, rd ou th. Funciona bem com j)
    // w - Representação numérica do dia (0 para domingo, 6 para sábado)
    // z - O dia do ano (de 0 a 365)
    // W - Número da semana ISO-8601 do ano (semanas começando na segunda-feira)
    // F - Representação textual completa do mês (janeiro a dezembro)
    // m - Representação numérica do mês (de 01 a 12)
    // M - Representação textual curta do mês (três letras)
    // n - Representação numérica do mês, sem zeros à esquerda (1 a 12)
    // t - Número de dias no mês dado
    // L - Se é ano bissexto (1 se sim, 0 se não)
    // o - Número do ano ISO-8601
    // Y - Representação de quatro dígitos do ano
    // y - Representação de dois dígitos do ano
    // a - am ou pm em minúsculas
    // A - AM ou PM em maiúsculas
    // B - Horário Internet Swatch (000 a 999)
    // g - Formato de 12 horas da hora (1 a 12)
    // G - Formato de 24 horas da hora (0 a 23)
    // h - Formato de 12 horas da hora (01 a 12)
    // H - Formato de 24 horas da hora (00 a 23)
    // i - Minutos com zeros à esquerda (00 a 59)
    // s - Segundos, com zeros à esquerda (00 a 59)
    // u - Microssegundos (adicionado no PHP 5.2.2)
    // e - Identificador do fuso horário (Exemplos: UTC, GMT, Atlantic/Azores)
    // I (i maiúsculo) - Se a data está em horário de verão (1 se sim, 0 se não)
    // O - Diferença em horas em relação ao Greenwich (GMT) (Exemplo: +0100)
    // P - Diferença em horas:minutos em relação ao Greenwich (GMT) (adicionado no PHP 5.1.3)
    // T - Abreviaturas do fuso horário (Exemplos: EST, MDT)
    // Z - Deslocamento do fuso horário em segundos. O deslocamento para fusos a oeste de UTC é negativo (-43200 a 50400)
    // c - Data no formato ISO-8601 (ex: 2013-05-05T16:34:42+00:00)
    // r - Data formatada conforme RFC 2822 (ex: Fri, 12 Apr 2013 12:01:05 +0200)
    // U - Os segundos desde a Época Unix (1 de janeiro de 1970 00:00:00 GMT)

    
    // Nas linhas abaixo, utilize a função date() para apresentar o que é solicitado
    // A data atual no formato: 2022/11/08

    
    // A data atual no formato: 2022-11-08


    // A data atual no formato: 8 de novembro de 2022


    // O ano atual;


    // O mês atual;


    // O mês atual por extenso;


    // O dia atual;


    // A sua data de nascimento num formato a seu gosto;


    // A hora atual no formato AM/PM;


    // A hora atual no formato 24H;


    // A hora atual com horas, minutos e segundos;


    // A data no formato "2022/11/08" daqui a 60 dias;


    // A data no formato "2022/11/08" à 60 dias atrás;


    // A função strtotime() passa um parâmetro de Inglês para um carimbo de data/hora
    // Descomente e analise os exemplos a seguir:
    // $ts = strtotime('2026-09-01');
    // echo date('Y-m-d', $ts);
    // echo "<br>";
    // $ts = strtotime('14 July 2007');
    // echo date('Y-m-d', $ts);
    // echo "<br>";
    // $ts = strtotime('+5 hours');
    // echo date('H:i:s', $ts);
    // echo "<br>";
    // $ts = strtotime('+1 week 3 days 7 hours 5 seconds');
    // echo date('Y-m-d H:i:s', $ts);
    // echo "<br>";
    // $ts = strtotime('next Monday');
    // echo date('Y-m-d H:i:s', $ts);
    // echo "<br>";
    // $ts = strtotime('last Sunday');
    // echo date('Y-m-d H:i:s', $ts);
    // echo "<br><br>";

    // Usando as funções acima, apresente o dia da semana em que nasceu
    // Margaret Hamilton, que desenvolveu o computador que guiou o Apollo até à Lua

    
    // Usando as funções acima, apresente o dia da semana em que nasceu Jesus


    ?>
</body>
</html>