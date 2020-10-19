<?php
//class
    class Veiculo{
        public $modelo;
        public $cor;
        public $ano;

        public function Andar(){
            echo "Andou";
        }

        public function Parar(){
           echo "Parou";
        }
    }

    class Carro extends Veiculo{
        public function LigarLimpador(){
            echo "Limpando! ";
        }
        
    }

    class Moto extends Veiculo{
        public function DarGrau(){
            echo "Dando grau! ";
        }
    }

    $carro  = new Carro();
    $carro->modelo = "Gol";
    $carro->cor = "Vermelho";
    $carro->ano = 2000;

    $carro->Andar();
    echo "<br>";
    $carro->LigarLimpador();

    var_dump($carro);


    $moto = new Moto();
    $moto->modelo = "Honda Biz";
    $moto->cor = "Amarela";
    $moto->ano =2010;

    $moto->Parar();
    echo "<br>";
    $moto->DarGrau();

    var_dump($moto);


?>