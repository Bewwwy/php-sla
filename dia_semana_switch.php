<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dia da Semana - Estrutura Switch</title>
</head>
<body>
    <?php
        echo "<h3>Dia da Semana - Estrutura Switch</h3>";
        $dia_semana = date("w"); // Obtém o dia da semana de 1 a 7
        $mensagem = "";
        echo "<h3>Dia da semana: ". $dia_semana. "</h3>";
        switch ($dia_semana)
        {
            case 0:
                $mensagem = "Domingo";
                break;
            case 1:
                $mensagem = "Segunda-Feira";
                break;
            case 2:
                $mensagem = "Terça-Feira";
                break;
            case 3:
                $mensagem = "Quarta-Feira";
                break;
            case 4:
                $mensagem = "Quinta-Feira";
                break;
            case 5:
                $mensagem = "Sexta-Feira";
                break;
            case 6:
                $mensaem = "Sábado";
                break;
            default:
                $mensagem = "Erro!";
                break;
        }
        echo "<h3>Hoje é ". $mensagem. "</h3>";
    ?>
</body>
</html>