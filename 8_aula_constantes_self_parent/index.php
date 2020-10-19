<?php
    class Pessoa{
        const nome = "Diego";

        public function exibirNome(){
            echo self::nome;
        }
    }

    class Diego extends Pessoa{
        const nome = "Rodrigues";

        public function exibirNome(){
            echo parent::nome;
        }
    }

    $pessoa = new Diego();
    $pessoa->exibirNome();

?>