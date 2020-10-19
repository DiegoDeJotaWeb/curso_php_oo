<?php
    //Associação
    //Acontece quando um objeto "utiliza" outro, porém, sem que eles dependam um do outro.


    class Pedido{
        public $numero;
        public $cliente;

        // public function (){

        // }
    }

    class Cliente{
        public $nome;
        public $endereco;

        // public function (){

        // }
    }

    $cliente = new Cliente();
    $cliente->nome = 'Diego Rodrigues';
    $cliente->endereco = 'Rua Gregorio Tagle';

    $pedido = new Pedido();
    $pedido->numero = "123";
    $pedido->cliente = $cliente;

    $dados = array(
        'numero' => $pedido->numero,
        'nome_cliente' => $pedido->cliente->nome,
        'endereco_cliente' => $pedido->cliente->endereco,
    );



    var_dump($dados);
?>