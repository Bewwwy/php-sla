<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Matemáticos em PHP</title>
</head>
<body>
    <?php
    echo "<h3>OPERADORES MATEMÁTICOS EM PHP</h3>";
    echo "<hr size='3' color='#ff0000' width='62%' align='left'>";
    $numero1=10;
    $numero2=15;
    echo "Numero1: " . $numero1;
    echo "<br>Número2: " . $numero2;
    echo "<h4>Efetuando a soma de $numero1 mais o $numero2 </h4>";
    $soma = $numero1 + $numero2;
    echo "<strong>Soma:</strong> " . $soma;
    // É possível inserir tags html no php, porém essas tags deverão ficar dentro das aspas

    echo "<hr size='3' color='#ff0000' width='62%' align='left'>";
    echo "<h4>Efetuando a subtração de $numero1 menos o $numero2 </h4>";
    $sub = $numero1 - $numero2;
    echo $sub;

    echo "<h4>Efetuando a divisão de $numero1 por $numero2 </h4>";
    $div = $numero1 / $numero2;
    echo $div;

    echo "<h4>Efetuando a multiplicação de $numero1 vezes o $numero2 </h4>";
    $mult = $numero1 * $numero2;
    echo $mult;

    echo "<h4>Exibindo o tipo da variável</h4>";
    echo var_dump($numero1);
    echo var_dump($numero2);
    ?>
</body>
</html>