<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constant</title>
</head>
<body>
    <?php
        echo "<h3 align='center'>Exemplo de constant em PHP</h3><hr>";
        //Definição de constante
        define("linguagem","PHP - Linguagem Dinâmica");
        echo "<strong>Linguagem: </strong>" . linguagem;

        define("caracteristica","A característica da linguagem <strong>PHP</strong>, é que a mesma necessita de servidor para interpretar, ou seja <u>compilar o código</u>.");
        echo "<p>" . caracteristica . "</p>";
    ?>
</body>
</html>