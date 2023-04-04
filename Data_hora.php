<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h3 align='center'>Data e hora em PHP</h3><hr>";
    date_default_timezone_set("America/Sao_Paulo");
    //Define as variáveis para receber o dia, mês e o ano
    $dia = date("d"); //Extrai o dia da função date
    $mes = date("M"); //Extrai o mês da função date
    $ano = date("Y"); //Extrai o ano da função date

    //Exibe a data do sistema operacional
    echo "<p>Hoje é dia ", $dia, " " . "de ", $mes, " " . "de ", $ano, "</p>";

    //Define as variáveis para receber a hora, minuto e segundo
    $hora = date("h"); //Extrai a hora da função date
    $minuto = date("m"); //Extrai o minuto da função date
    $segundo = date("s"); //Extrai o segundo da função date

    //Exibe a data do sistema operacional
    echo "<p>Agora são ", $hora, ":" . $minuto, ":" . $segundo, " " . "</p>";

    ?>
</body>
</html>