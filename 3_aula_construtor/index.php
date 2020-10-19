<?php
//class
    class Login{



        //atributo
        private $email;
        private $senha;
        private $nome;

        //metodo construtor

        public function __construct($email,$senha, $nome){
            $this->nome = $nome;
            $this->setEmail($email);
            $this->setSenha($senha);
        }

        public function getNome(){
            return $this->nome;
        }


        //metodo
        public function getEmail(){
            return $this->email;
        }

        //metodo
        public function setEmail($e){
            $emailLimpo = filter_var($e, FILTER_SANITIZE_EMAIL);
            $this->email = $emailLimpo;
        }

        //metodo
        public function getSenha(){
            return $this->senha;
        }

        //metodo
        public function setSenha($s){
            $this->senha = $s;
        }

        public function Logar(){
            if($this->email == "teste@teste.com" and $this->senha == "12345"):
                echo "Login com sucesso!";
            else:
                echo "Dados inválidos";
            endif;
        }
    }
    //objeto
    $logar = new Login("teste@teste.com", "12345", "Diego Rodrigues");

    $logar->Logar();

    echo '<br>';

    echo $logar->getNome();

?>