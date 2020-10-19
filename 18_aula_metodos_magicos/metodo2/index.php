<?php
    //clone
    //construct
    //invoke
    //tostring
    //get
    //set

    Class Pessoa{
        private $dados = array();

        public function __set($nome, $valor){
            $this->dados[$nome] = $valor;
        }

        public function __get($nome){
            return $this->dados[$nome];
        }
    }

    $pessoa = new Pessoa();
    $pessoa->nome = 'Diego';
    $pessoa->idade = 28;
    $pessoa->sexo = 'M';

    //var_dump($pessoa);

    echo $pessoa->nome;
    echo "<br>";
    echo $pessoa->idade;
    echo "<br>";
    echo $pessoa->sexo;

?>