<?php
//Agregação 
// Na agregação, uma classe precisa da outra para executar sua ação, ou seja, uma classe
//utiliza a outra como parte de si própria.

class Produtos{
    public $nome;
    public $valor;

    function __construct($nome, $valor){
        $this->nome = $nome;
        $this->valor = $valor;
    }


}

class Carrinho{
    public $produtos;

    public function adciona(Produtos $produto){
        $this->produtos[] = $produto;
    }

    public function exibe(){
        foreach ($this->produtos as $produto){
             echo $produto->nome."<br>";
             echo $produto->valor."<hr>";
        }
    }
}


$produto1 = new Produtos("Notebook", "1200");
$produto2 = new Produtos("Geladeira", "1600");
$produto3 = new Produtos("Mouse", "50");
$produto4 = new Produtos("Fogão", "700");

$carrinho = new Carrinho();
$carrinho->adciona($produto1);
$carrinho->adciona($produto2);
$carrinho->adciona($produto3);
$carrinho->adciona($produto4);

$carrinho->exibe();
?>