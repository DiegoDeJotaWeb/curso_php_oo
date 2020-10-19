<?php
//class
    class Login{

        //atributo
        private $email;
        private $senha;


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
    $logar = new Login();

    $logar->setEmail('teste(/@teste.com');
    $logar->setSenha('12345');

    $logar->Logar();

    echo '<br>';

    echo $logar->getEmail();

?>