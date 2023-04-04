<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de 2 número com formulário</title>
    <style type="text/css">
        h3 {
            color:blue;
            border-bottom: 2px solid blue;
            width: 180px;
        }
        label, input {
            color: blue;
        }
        input {
            margin-left: 5px;
        }
    </style>
</head>
<body>
<?php

/*method = get - padrão
           post
  action = acessar outra página
              "    mesma página

botôes
button - só executará alguma ação se utilizar evento no JS
submit - permite compilar (submeter, enviar) os dados para 
o que foi definido no action
reset - limpa os dados do form
*/

    echo "<h3>Soma de 2 Números </h3>";
    echo "<form name='soma' method='post' action='Exibir_Soma.php'>";
    echo "<p>";
        echo "<label for='numero1'>Número1:</label>";
        echo "<input type='text' name='num1' size=4 maxlength=4 required>";
    echo "</p>";

    echo "<p>";
        echo "<label for='numero2'>Número2:</label>";
        echo "<input type='text' name='num2'size=4 maxlength=4 required>";
    echo "</p>";

    echo "<p>";
        echo "<input type='submit' value='Somar' name='somar'>";
        echo "<input type='reset' value='Limpar' name='limpar'>";
    echo "</p>";
    echo "</form>";

?>
</body>
</html>