
<?php
include("classes/DB.class.php");
include("classes/Produto.class.php");
?>

<?php
if(isset($_POST['botao']) && $_POST['botao'] == "Salvar"){    
    $produto = new Produto($_POST['id']);
    $produto->setDescricao($_POST['descricao']);
    $produto->setPreco($_POST['preco']);
    $produto->setQuantidade($_POST['quantidade']);
    $produto->atualizar();    
}
?>  



<?php
if(isset($_GET['id']) AND is_numeric($_GET['id'])){
    $produto = new Produto($_GET['id']);
?>

<form method='post' action=''>
Descrição:      <input type="text" name='descricao' value='<?php echo $produto->getDescricao();?>'></br>
Preço:          <input type="text" name='preco'  value='<?php echo $produto->getPreco();?>'></br>
Quantidade:     <input type="text" name='quantidade' value=''></br>
<input type="hidden" name='id'  value='<?php echo $produto->getId();?>'></br>

<input type='submit' name='botao' value='Salvar'>
</form>




<?php } ?>