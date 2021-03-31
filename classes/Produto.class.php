<?php

    class Produto{
        private $descricao;
        private $preco;
        private $quantidade;

        public function setDescricao($string){
            $this->descricao = $string;
        }

        public function setPreco($preco){
            $this->preco = $preco;
        }

        public function setQuantidade($qnt){
            $this->quantidade = $qnt;
        }

        public function getDescricao(){
            return $this->descricao;
        }

        public function getPreco(){
            return $this->preco;
        }

        public function getQuantidade(){
            return $this->quantidade;
        }

        
    }
?>
