<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Despesas - Pesquisa</title>
    <link rel="stylesheet" href="estilos_menu.css">
    <link rel="stylesheet" href="estilos_formulario.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="table.css">
</head>
<body>
    <!-- estilizar a tabela: cores: na primeira linha de fundo e na cor da fonte, e nas outras linhas cor diferente nas linhas-->

    <?php
        require "menu.php";

        echo "<h3>Listagem das Contas </h3>";
        require "conexao.php";

        $sql = "SELECT * FROM contas ORDER BY data";
        $resultado = mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
        echo "<table border='1' width='1000' align='center'>";
            echo "<tr>";
                echo "<th width='250' align='right'>Lançamento</th>";
                echo "<th width='300' align='Left'>Código do Cliente</th>";
                echo "<th width='300' align='Left'>Data de Lançamento</th>";
                echo "<th width='250' align='Left'>Histórico</th>";
                echo "<th width='50' align='Left'>Valor</th>";
            echo "</tr>";
            while ($linha=mysqli_fetch_array($resultado)) {
                $lacamento = $linha["lancamento"];
                $codigo_cliente = $linha["codigo_cliente"];
                $data = $linha["data"];
                $historico = $linha["historico"];
                $valor = $linha["valor"];
                echo "<tr>";
                    echo "<th width='100' align='right'>$lacamento</th>";
                    echo "<th width='100' align='right'>$codigo_cliente</th>";
                    echo "<th width='300' align='Left'>$data</th>";
                    echo "<th width='100' align='Left'>$historico</th>";
                    echo "<th width='250' align='Left'>$valor</th>";
                    echo "<th width='50' align='center'><a href='contas_editar.php?lacamento=$lacamento'>Editar</a></th>";
                echo "</tr>";
            }
        echo "</table>";
    ?>
    <footer>
    <p>&copy; Adryelly</p>
</footer>
</body>
</html>