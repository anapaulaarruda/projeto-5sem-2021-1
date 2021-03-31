<?php

    class Cliente{
        private $nome;
        private $email;
        private $telefone;

        public function setNome($string){
            $this->nome = $string;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        public function getNome(){
            return $this->nome;
        }

        public function getEmail(){
            return $this->email;
        }

        public function getTelefone(){
            return $this->telefone;
        }

        
    }
?>
