<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprender PHP - Controlo - Exercício 4</title>
</head>
<body>
    <?php
    // Com a estrutura switch..case, poderemos "filtrar" um determinado
    // código com base no conteúdo de uma variável.
    // Altere o valor atribuído à variável $opcao para testar.
    // Como fazemos para irmos para a página de contactos?
    // O que acontece quando a opção não existe?
    $opcao="Pagina1";
    switch ($opcao) {
        case "Pagina1":
            echo "<h1>Página Principal</h1>";
            echo "<p>Seja bem vindo à página principal deste website!</p>";
            break;
        case "Pagina2":
            echo "<h1>Serviços</h1>";
            echo "<p>Seja bem vindo à página dos serviços deste website!</p>";
            break;
        case "Pagina3":
            echo "<h1>Página de Contactos</h1>";
            echo "<p>Seja bem vindo à página de contactos deste website!</p>";
            break;
        default:
            echo "<h1>Erro!</h1>";
            echo "<p>A página que procura não existe!</p>";
    }
    
    // Podemos combinar opções.
    // Imagine que a página principal era a mesma que a dos serviços.
    // Descomente o código abaixo para testar.
    // $opcao2="Pagina1";
    // switch ($opcao2) {
    //     case "Pagina1":
    //     case "Pagina2":        
    //         echo "<h1>Página Principal</h1>";
    //         echo "<p>Seja bem vindo à página principal deste website!</p>";
    //         break;
    //     case "Pagina3":
    //         echo "<h1>Página de Contactos</h1>";
    //         echo "<p>Seja bem vindo à página de contactos deste website!</p>";
    //         break;
    //     default:
    //         echo "<h1>Erro!</h1>";
    //         echo "<p>A página que procura não existe!</p>";
    // }

    // Nas linhas abaixo, crie o código necessário para converter os
    // $meses, em formato numérico, para uma String $mes_texto com o nome do mês.
    // Exemplo:
    // $mes = 8;
    // $mes_texto = "Agosto"; 
    // Exercício: (descomente o código a seguir)
    // $mes="1";
    // switch ($mes) {
    //     case "...":
    //         // Converte o mês e mostra-o no ecrã
    //         break;
    //     case "...":        
    //         // Converte o mês e mostra-o no ecrã
    //         break;
    //     case "...":
    //         // Converte o mês e mostra-o no ecrã
    //         break;
    //     (...)
    //     default:
    //         // Aviso de erro
    // }
    ?>
</body>
</html>