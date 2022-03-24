<?php
    require("connect.php");

    $codigo_livro = $_POST['c_codigo'];

    $sql = " `item` where codigo_item = $codigo_livro";

    $resultado = mysqli_query($conexao, $sql);

?>