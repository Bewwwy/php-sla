<?
    $host = "localhost";
    $user = "root";
    $pass = "usbw"; // Usuário do XAMP deixar senha em branco
    $banco = "despesas_elly";
    $conexao = mysqli_connect($host,$user,$pass) or die(mysqli_error($conexao));
    mysqli_select_db($conexao, $banco);
?>