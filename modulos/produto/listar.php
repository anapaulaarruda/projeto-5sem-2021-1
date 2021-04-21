<?php
    include("classes/DB.class.php");
    include("classes/Produto.class.php");
    $produtos = Produto::listar();
?>





<table>
<tr>
    <th>ID</th>
    <th>DESCRICAO</th>
    <th>PRECO</th>
    <th>QUANTIDADE</th>
    <th>Operação</th>
</tr>

<?php
if($produtos){
    foreach($produtos as $produto){
?>
    <tr>
        <td><?php echo $produto->getId();?></td>
        <td><?php echo $produto->getDescricao();?></td>
        <td><?php echo $produto->getPreco();?></td>
        <td><?php echo $produto->getQuantidade();?></td>
        <td><a href="?modulo=produto&acao=editar&id=<?php echo $produto->getId();?>">Editar</a></td>
        <td><a href="?modulo=produto&acao=excluir&id=<?php echo $produto->getId();?>">Excluir</a></td>
        
    </tr>
<?php
    }
}else{
    echo "<tr><td colspan='4'> Nenhum Registro Encontrado.</td></tr>";
}
?>
</table>