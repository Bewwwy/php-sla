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
        $receita1 = $_POST["rec1"];
        $receita2 = $_POST["rec2"];
        echo "Receita 1: " .number_format($receita1, 2), "<br>";
        echo "Receita 2: " .number_format($receita2, 2);
        $totalrec = $receita1 + $receita2;
        echo "<br>Total de receitas: " .number_format($totalrec, 2);
        echo "<hr align='left' width='70%'>"; 
        
        $despesa1 = $_POST["des1"];
        $despesa2 = $_POST["des2"];
        $despesa3 = $_POST["des3"];
        $despesa4 = $_POST["des4"];
        $despesa5 = $_POST["des5"];
        $despesa6 = $_POST["des6"];
        echo "Despesa 1: " .number_format($despesa1, 2), "<br>";
        echo "Despesa 2: " .number_format($despesa2, 2), "<br>";
        echo "Despesa 3: " .number_format($despesa3, 2), "<br>";
        echo "Despesa 4: " .number_format($despesa4, 2), "<br>";
        echo "Despesa 5: " .number_format($despesa5, 2), "<br>";
        echo "Despesa 6: " .number_format($despesa6, 2);
        $totaldes = $despesa1 + $despesa2 + $despesa3 + $despesa4 + $despesa5 + $despesa6;
        echo "<br>Total de despesas: " .number_format($totaldes, 2);
        echo "<br><br>";

        if ($totaldes > $totalrec) {
            echo "Resulatado: Débito";
        }
        else {
            echo "Resulatado: Crédito";
        }

    ?>
</body>
</html>