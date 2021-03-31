
<?php
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    include('classes/Produto.class.php');
    $produto = new Produto();
    $produto->setDescricao($descricao);
    $produto->setPreco($preco);
    $produto->setQuantidade($quantidade);

    echo "O Nome do Produto digitado: ".$produto->getDescricao()."<br/>";
    echo "O Preço do Produto digitado: ".$produto->getPreco()."<br/>";
    echo "A Quantidade do Produto digitado: ".$produto->getQuantidade()."<br/>";

?>


<form method='post' action=''>
Descrição:      <input type="text" name='descricao'></br>
Preço:          <input type="text" name='preco'></br>
Quantidade:     <input type="text" name='quantidade'></br>

<input type='submit' name='salvar' value='Salvar'>

</form>