<?php
//Agregação 
// Na agregação, uma classe precisa da outra para executar sua ação, ou seja, uma classe
//utiliza a outra como parte de si própria.

class Pessoa{
    public function atribuiNome($nome){
        return "O nome da pessoa é ". $nome;
    }
}

Class Exibe{
    public $pessoa;
    public $nome;

    function __construct($nome){
        $this->pessoa = new Pessoa();
        $this->nome = $nome;
    }

    public function exibeNome(){
        echo $this->pessoa->atribuiNome($this->nome);
    }
}

$exibe = new Exibe('Diego');
$exibe->exibeNome();




?>