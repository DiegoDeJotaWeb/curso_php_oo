<?php

    interface Crud{
        public function create($data);
        public function read();
        public function update();
        public function delete();
    }

    class Noticias implements Crud{
        public function create($data){
            //Lógica para criar uma noticia 
        }

        public function read(){
            //Lógica para ler uma noticia 
        }

        public function update(){
            //Lógica para alterar uma noticia 
        }

        public function delete(){
            //Lógica para deletar uma noticia 
        }
    }
?>