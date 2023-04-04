<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula e ecibe a soma</title>
</head>
<body>
    <?php
        echo "<h3>CALCULA E EXIBE A SOMA</h3>";
        $numero1 = $_POST["num1"]; // Recupera o conteúdo digitado na caixa1 pg soma2numero
        $numero2 = $_POST["num2"];
        echo "Número 1: " .$numero1, "<br>";
        echo "Número 2: " .$numero2;
        echo "<br>", $numero1 + $numero2;
    ?>
</body>
</html>