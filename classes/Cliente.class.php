<?php

    class Cliente{
        private $id;
        private $nome;
        private $email;
        private $telefone;

        public function setId($id){
            $this->id = $id;
        }

        public function setNome($string){
            $this->nome = $string;
        }

        public function setEmail($email){
            $this->email = $email;
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        public function getId(){
            return $this->id;
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

        public static function listar(){
            
            $sql = "SELECT * FROM cliente";
            $stmt = DB::conexao()->prepare($sql);
            $stmt->execute();
            $registros = $stmt->fetchAll(PDO::FECH_ASSOC); 

            if($registros){
                $itens = array();

                foreach($registros as $registro){
                    $objTemporario = new Cliente();
                    $objTemporario->setId($registro['id']);
                    $objTemporario->setNome($registro['nome']);
                    $objTemporario->setEmail($registro['email']);
                    $objTemporario->setTelefone($registro['telefone']);
                    $itens[] = $objTemporario;
                }

                return $itens;
            }
            return false;
        }

        public function adicionar(){
            try{
                
                $sql = "INSERT INTO cliente (nome, email, telefone )
                VALUES (:nome, :email, :telefone)";

                $stmt = DB::conexao()->prepare($sql);
                $stmt->bindParam(':nome', $this->nome);
                $stmt->bindParam(':email', $this->email );
                $stmt->bindParam(':telefone', $this->telefone);
                $stmt->execute();

            }catch(PDOException $e){
                echo "ERRO AO ADICIONAR: ".$e->getMessage();
            }
        }

        
    }
?>
