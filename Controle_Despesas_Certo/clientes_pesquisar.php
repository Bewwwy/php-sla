<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_menu.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="table.css">
    <title>Controle de Despesas - Pesquisa</title>
</head>
<body>
    <!-- estilizar a tabela: cores: na primeira linha de fundo e na cor da fonte, e nas outras linhas cor diferente nas linhas-->
    <?php
        require "menu.php";
        echo "<h3>Listagem dos Clientes</h3>";
        require "conexao.php";
        $sql="SELECT * FROM clientes ORDER BY nome";
        $resultado=mysqli_query($conexao,$sql) or die(mysqli_error($conexao));
        echo "<table border='1' width='1000' align='center'>";
            echo "<tr>";
                echo "<th width='100' align='right'>Código</th>";
                echo "<th width='300' align='left'>Nome</th>";
                echo "<th width='100' align='left'>CPF</th>";
                echo "<th width='250' align='left'>E-mail</th>";
                echo "<th width='50' align='left'>Editar</th>";
            echo "</tr>";
            while($linha=mysqli_fetch_array($resultado)) {
                $codigo = $linha["codigo"];
                $nome = $linha["nome"];
                $cpf = $linha["cpf"];
                $email = $linha["email"];
                // Exibindo os dados
                echo "<tr>";
                echo "<td width='100' align='right'>$codigo</th>";
                echo "<td width='300' align='left'>$nome</th>";
                echo "<td width='100' align='left'>$cpf</th>";
                echo "<td width='250' align='left'>$email</th>";
                echo "<td width='50'><a href='clientes_pesquisar.php?codigo=$codigo'>Editar</td>";
                echo"</tr>";
            }
    ?>
    <footer>
    <p>&copy; Adryelly</p>
</footer>
</body>
</html>