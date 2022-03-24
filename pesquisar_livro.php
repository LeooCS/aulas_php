<?php
    require("connect.php");

    $nome_livro = $_POST['c_nome_livro'];

    $sql = "SELECT `codigo_item` FROM `item` WHERE descricao = $nome_livro";

    $resultado = mysqli_query($conexao, $sql);

    $quantidade = mysql_num_rows($resultado);

    echo $resultado;

?>
<p><a href="form_cadastrar_livro.html">Voltar</a