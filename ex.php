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
        echo "<h2>Controle de Gastos</h2>";

        echo "<h3>Receitas</h3>";

        echo "<form name='soma' method='post' action='Exibir_Calculo.php'>";
        echo "<p>";
            echo "<label for='receita1'>Receita1: </label>";
            echo "<input type='num' name='rec1' size=9 required>";
        echo "</p>";
        echo "<p>";
            echo "<label for='receita2'>Receita2: </label>";
            echo "<input type='num' name='rec2' size=9 required>";
        echo "</p>";


        echo "<h3>Despesas</h3>";

        echo "<form name='soma' method='post'>";
        echo "<p>";
            echo "<label for='despesa1'>Despesa1: </label>";
            echo "<input type='num' name='des1' size=9 required>";
        echo "</p>";
        echo "<p>";
            echo "<label for='despesa2'>Despesa2: </label>";
            echo "<input type='num' name='des2' size=9 required>";
        echo "</p>";
        echo "<p>";
            echo "<label for='despesa3'>Despesa3: </label>";
            echo "<input type='num' name='des3' size=9 required>";
        echo "</p>";
        echo "<p>";
            echo "<label for='despesa4'>Despesa4: </label>";
            echo "<input type='num' name='des4' size=9 required>";
        echo "</p>";
        echo "<p>";
            echo "<label for='despesa5'>Despesa5: </label>";
            echo "<input type='num' name='des5' size=9 required>";
        echo "</p>";
        echo "<p>";
            echo "<label for='despesa6'>Despesa6: </label>";
            echo "<input type='num' name='des6' size=9 required>";
        echo "</p>";

        echo "<p>";
            echo "<input type='submit' value='Calcular' name='somar'>";
        echo "</p>";
        echo "</form>";

    ?>
</body>
</html>