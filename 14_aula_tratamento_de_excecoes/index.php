<?php
    class Newsletter{
        public function cadastrarEmail($email){
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
                throw new Exception("Este email é inválido", 1);
            else:
                echo "email cadastrado com sucesso";
            endif;
        }
    }

    $newsletter = new Newsletter();

    try{
        $newsletter->cadastrarEmail("teste@");
    } catch( Exception $e){
        echo "Mensagem: " . $e->getMessage();
        echo "<br>";
        echo "Código: " . $e->getCode();
        echo "<br>";
        echo "Linha: " . $e->getLine();
        echo "<br>";
        echo "Arquivo: " . $e->getFile();
        echo "<br>";
    }


    

?>