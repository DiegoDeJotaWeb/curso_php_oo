<?php
    require 'classes/Produto.php';

    require 'models/Produto.php';

    $produto = new \classes\Produto();
    $produto->mostrarDetalhes();

    echo "<br>";

    $produto = new \models\Produto();
    $produto->mostrarDetalhes();

?>