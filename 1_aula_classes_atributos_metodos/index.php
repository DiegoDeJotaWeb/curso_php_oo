<?php
//class
    class Pessoa{
        //atributos
        public $nome;
        public $idade;

        //metodos
        public function Falar(){
            echo $this->nome. " de " . $this->idade. " falou!";
        }
    }
    //objeto
    $diego = new Pessoa();

   
    $diego->nome = "Diego Rodrigues";
    $diego->idade = 28;
    $diego->Falar();

    var_dump($diego);

    // echo $diego->nome . $diego->idade;
?>