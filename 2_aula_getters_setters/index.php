<?php
//class
    class Login{

        public $email;
        public $senha;

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

    $logar->email = "teste@teste.com";
    $logar->senha = "12345";

    $logar->Logar();

?>