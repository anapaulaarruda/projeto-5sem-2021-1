<?php
    include("classes/Produto.class.php");
    $produtos = Produto::listar();
?>

<table>
<tr>
    <th>ID</th>
    <th>DESCRICAO</th>
    <th>PRECO</th>
    <th>QUANTIDADE</th>
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
    </tr>
<?php
    }
}else{
    echo "<tr><td colspan='4'> Nenhum Registro Encontrado.</td></tr>";
}
?>
</table>