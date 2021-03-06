<?php

    class Cliente{
        private $id;
        private $nome;
        private $email;
        private $telefone;

        public function __construct($id=false){
            if($id){
                $sql = "SELECT * FROM cliente WHERE id_cliente =  :id";
                $stmt = DB::Conexao()->prepare($sql);
                $stmt->bindParam(":id", $id, PDO::PARAM_INT);
                $stmt->execute();

                foreach($stmt as $registro){
                    $this->setId($registro['id_cliente']);
                    $this->setNome($registro['nome']);
                    $this->setEmail($registro['email']);
                    $this->setTelefone($registro['telefone']);
                }
            }
        }


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

        public function atualizar(){
            if($this->id){
                try{
                    $sql = "UPDATE cliente SET
                            nome = :nome,
                            email = :email,
                            telefone = :telefone
                            WHERE id_cliente = :id";
                    $stmt = DB::conexao()->prepare($sql);
                    $stmt->bindParam(':nome', $this->descricao);
                    $stmt->bindParam(':email', $this->email);
                    $stmt->bindParam(':telefone', $this->telefone);
                    $stmt->bindParam(':id', $this->id);
                    $stmt->execute();
                    
                }catch(PDOExcetion $e){
                    echo "ERRO AO ATUALIZAR: ".$e->getMessage();
                } 
            }            
        }

        public function excluir(){
            if($this->id){
                try{
                    $sql = "DELETE FROM cliente WHERE id_cliente = :id";

                    $stmt = DB::Conexao()->prepare($sql);
                    $stmt->bindParam(":id", $this->id);
                    $stmt->execute();

                }catch(PDOExcetion $e){
                    echo "ERRO AO EXCLUIR: ".$e->getMessage();
                } 
            }
        }
        
    }
?>
