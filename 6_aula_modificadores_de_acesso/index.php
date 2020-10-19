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
        public $cor;
        public $ano;

        private function Andar(){
            echo "Andou";
        }

        public function Parar(){
           echo "Parou";
        }
        
        public function mostrarAcao(){
            $this->Andar();
        }
    }

    class Carro extends Veiculo{
        public function LigarLimpador(){
            echo "Limpando! ";
        }     
        
    }

    $carro = new Veiculo();
    $carro->mostrarAcao();

    
    

?>