


<?php
    $produtos = array();
    $produtos[] = array("id" => 1, "descricao" => "Coca", "preco" => "10.00", "quantidade" => "2");   
    $produtos[] = array("id" => 2, "descricao" => "Fanta", "preco" => "12.00", "quantidade" => "1");   
    $produtos[] = array("id" => 3, "descricao" => "Guarana", "preco" => "13.00", "quantidade" => "4");   
    $produtos[] = array("id" => 4, "descricao" => "Pepsi", "preco" => "14.00", "quantidade" => "5");          
?>
<table>

<tr>
    <th>ID</th>
    <th>DESCRICAO</th>
    <th>PRECO</th>
    <th>QUANTIDADE</th>
</tr>

<?php
    foreach($produtos as $produto){
?>
    <tr>
        <td><?php echo $produto['id'];?></td>
        <td><?php echo $produto['descricao'];?></td>
        <td><?php echo $produto['preco'];?></td>
        <td><?php echo $produto['quantidade'];?></td>
    </tr>
<?php
    }
?>
</table>