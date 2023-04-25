<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números randômicos utilizando looping While</title>
</head>
<body style=color:red>
    <?php
        echo "<h3>Números Randômicos - Looping While</h3>";
        $numero = 0;
        $contador = 1;
        while($contador <= 6)
        {
        $numero = rand(1,100); // Comando rand, gera números randômicos (aleatórios).
        echo $contador. "º número gerado foi ";
        echo $numero. "<br>";
        $contador++;
        }
        echo "<h2>Fim do looping <strong><em>WHILE</em></strong></h2>";
    ?>
</body>
</html>