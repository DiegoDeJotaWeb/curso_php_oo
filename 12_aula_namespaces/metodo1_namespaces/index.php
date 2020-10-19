<?php
    require 'classes/Produto.php';

    require 'models/Produto.php';

    use models\Produto;

    $produto = new Produto();
    $produto->mostrarDetalhes();

    echo "<br>";


?>