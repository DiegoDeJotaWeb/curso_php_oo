<?php
    require 'classes/Produto.php';

    require 'models/Produto.php';

    use classes\Produto as productClasses;
    use models\Produto as productModels;
    $produto = new productClasses();
    $produto->mostrarDetalhes();
    echo "<br>";
    $produto2 = new productModels();
    $produto2->mostrarDetalhes();


?>