
<?php
if(isset($_POST['botao']) && $_POST['botao'] == "Salvar"){    
    include('classes/Produto.class.php');
    $produto = new Produto();
    $produto->setDescricao($_POST['descricao']);
    $produto->setPreco($_POST['preco']);
    $produto->setQuantidade($_POST['quantidade']);
    $produto->adicionar();    
}
   
?>


<form method='post' action=''>
Descrição:      <input type="text" name='descricao'></br>
Preço:          <input type="text" name='preco'></br>
Quantidade:     <input type="text" name='quantidade'></br>

<input type='submit' name='botao' value='Salvar'>

</form>