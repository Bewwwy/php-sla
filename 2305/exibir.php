<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibindo dados da Sessão</title>
</head>
<body>
    <?php
        echo "<h3>EXIBINDO DADOS DA SESSÃO</h3>";
        session_start();
        $nome = $_SESSION["nome"];
        $email = $_SESSION["email"];

        echo "<strong>Nome: </strong>". $nome;
        echo "<br><strong>E-mail: </strong>" . $email;
    ?>
</body>
</html>