<?php

/*
public - fará com que não haja ocultação nenhuma, toda propriedade ou método declarado com public serão
acessíveis por todos que quiserem acessá-los

protected - visibilidade protected faz com que todos os herdeiros vejam as propriedade 
ou métodos protegidos como se fossem públicos

private - ao contrário do public, esse modificador faz com que qualquer método ou propriedade
seja visível só e somente pela classe que a declarou 

*/
//class
    class Veiculo{
        public $modelo;
        protected $cor;
        private $ano;

        public function Andar(){
            echo "Andou";
        }

        public function Parar(){
           echo "Parou";
        }

        public function setAno($a){
            $this->ano = $a;
        }

        public function getAno(){
            return $this->ano;
        }

        
    }

    class Carro extends Veiculo{
        public function LigarLimpador(){
            echo "Limpando! ";
        }

        public function setCor($c){
            $this->cor = $c;
        }

        public function getCor(){
            return $this->cor;
        }

       
        
    }

    class Moto extends Veiculo{
        public function DarGrau(){
            echo "Dando grau! ";
        }
    }

    $veiculo = new Carro();

    $veiculo->modelo = "Gol";
    echo $veiculo->modelo;
    echo "<br>";
    $veiculo->setCor("Verde");
    echo $veiculo->getCor();
    echo "<br>";
    $veiculo->setAno(2020);
    echo $veiculo->getAno();

    var_dump($veiculo);
    

?>