<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Controle Bancário em PHP</title>
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") //se os dados foram cadastrados no formulário
        {  
            echo "<h3>CONTROLE BANCÁRIO EM PHP</h3>";
            $N_Banco = ""; // Armazena nome do banco
            $TipoConta = ""; // Armazena o tipo da conta
            $Nome_Correntista = $_POST["nome"];
            echo "<strong>Nome do correntista: </strong>".$Nome_Correntista;
            $Banco = $_POST["banco"];

            // Exibindo o nome completo do banco
            if($Banco == "caixa") // Se for o banco selecionado
                $N_Banco = "Caixa Econômica Federal"; // Armazena o banco completo

            else if($Banco == "santander")
                $N_Banco = "Banco Santander";

            else if($Banco == "mercantil")
                $N_Banco = "Banco Mercantil";
            
            else if($Banco == "brasil")
                $N_Banco = "Banco do Brasil";
            else
                $N_Banco = "Banco Bradesco";
            echo "<br><strong>Nome do Banco: </strong>".$N_Banco; // Exibe o nome completo
        }
        else
        {
            echo "Atenção, você tem que cadastrar os dados primeiro!";
            echo "<p><a href='banco_cc.php'>Cadastro da Conta Corrente</a></p>";
        }
    ?>
</body>
</html>