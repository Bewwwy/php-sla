<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício</title>
</head>
<body>
<?php

    echo "<body bgcolor='LightSteelBlue'>";
    echo "<h3>CÁLCULO DE MENSALIDADE</h3><hr align='left' color='SteelBlue' width='25%'>";

    define("nome","Gabriel Gabrielson");
    $valor = 3250.5;
    $ano = 2023;
    $parecela = 5;

    $mensalidade = $valor / $parecela;

    echo "<strong>Nome do aluno............: <em>" . nome . "</em></strong>";
    echo "<br><strong>Valor do curso.............: </strong>";
    echo "R$" . number_format($valor, 2);
    echo "<br><strong>Ano...............................: </strong>", $ano;
    echo "<br><strong>Qtde de parcelas..........: </strong>", $parecela;
    echo "<br><strong>Válor de Mensalidade.: </strong>";
    echo "R$" . number_format($mensalidade, 2);
    echo "<hr align='left' color='SteelBlue' width='25%'>";

    echo "<br><br><strong><u>TIPO DE VARIÁVEIS UTILIZADAS</u></strong><br><br>";
    echo var_dump(nome), " " . var_dump($valor), " " . var_dump($ano);

?>
</body>
</html>