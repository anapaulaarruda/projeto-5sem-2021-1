<?php
    class Produto{
        private $id;
        private $descricao;
        private $preco;
        private $quantidade;

        public function __construct($id=false){
            if($id){
                $sql = "SELECT * FROM produto WHERE id_produto =  :id";
                $stmt = DB::Conexao()->prepare($sql);
                $stmt->bindParam(":id", $id, PDO::PARAM_INT);
                $stmt->execute();

                foreach($stmt as $registro){
                    $this->setId($registro['id_produto']);
                    $this->setDescricao($registro['descricao']);
                    $this->setPreco($registro['preco']);
                    $this->setQuantidade($registro['quantidade']);
                }
            }
        }

        public function setId($id){
            $this->id = $id;
        }

        public function setDescricao($string){
            $this->descricao = $string;
        }

        public function setPreco($preco){
            $this->preco = $preco;
        }

        public function setQuantidade($qnt){
            $this->quantidade = $qnt;
        }

        public function getId(){
            return $this->id;
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

        public static function listar(){
            $sql = "SELECT * FROM produto";
            $stmt = DB::conexao()->prepare($sql);
            $stmt->execute();
            $registros = $stmt->fetchAll(PDO::FETCH_ASSOC); 

            if($registros){
                $itens = array();

                foreach($registros as $registro){
                    $objTemporario = new Produto();
                    $objTemporario->setId($registro['id_produto']);
                    $objTemporario->setDescricao($registro['descricao']);
                    $objTemporario->setPreco($registro['preco']);
                    // $objTemporario->setQuantidade($registro['quantidade']);
                    $itens[] = $objTemporario;
                }

                return $itens;

            }
            return false;
        }

        public function adicionar(){            

            try{
                $sql = "INSERT INTO produto (descricao, preco, quantidade)
                VALUES (:descricao, :preco, :quantidade)";

                $stmt = DB::conexao()->prepare($sql);
                $stmt->bindParam(':descricao', $this->descricao);
                $stmt->bindParam(':preco', $this->preco);
                $stmt->bindParam(':quantidade', $this->quantidade);
                $stmt->execute();
            }catch(PDOException $e){
                echo "ERRO AO ADICIONAR: ".$e->getMessage();
            }
            
        }

        public function atualizar(){
            if($this->id){
                try{
                    $sql = "UPDATE produto SET
                            descricao = :descricao,
                            preco = :preco
                            WHERE id_produto = :id";
                    $stmt = DB::conexao()->prepare($sql);
                    $stmt->bindParam(':descricao', $this->descricao);
                    $stmt->bindParam(':preco', $this->preco);
                    $stmt->bindParam(':id', $this->id);
                    $stmt->bindParam(':quantidade', $this->quantidade);
                    $stmt->execute();
                    
                }catch(PDOExcetion $e){
                    echo "ERRO AO ATUALIZAR: ".$e->getMessage();
                } 
            }            
        }        

        public function excluir(){
            if($this->id){
                try{
                    $sql = "DELETE FROM produto WHERE id_produto = :id";

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
