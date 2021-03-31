

<?php
    $clientes = array();
    $clientes[] = array("id" => 1, "nome" => "Joao", "email" => "joao@gmail.com", "telefone" => "123456");
    $clientes[] = array("id" => 2, "nome" => "Maria", "email" => "maria@gmail.com", "telefone" => "654321");
    $clientes[] = array("id" => 3, "nome" => "Pedro", "email" => "pedro@gmail.com", "telefone" => "123123");   
    $clientes[] = array("id" => 4, "nome" => "José", "email" => "jose@gmail.com", "telefone" => "456456");   
    $clientes[] = array("id" => 5, "nome" => "Benedito", "email" => "bene@gmail.com", "telefone" => "456456");           
?>
<table>

<tr>
    <th>ID</th>
    <th>NOME</th>
    <th>EMAIL</th>
    <th>TELEFONE</th>
</tr>

<?php
    foreach($clientes as $cliente){
?>
    <tr>
        <td><?php echo $cliente['id'];?></td>
        <td><?php echo $cliente['nome'];?></td>
        <td><?php echo $cliente['email'];?></td>
        <td><?php echo $cliente['telefone'];?></td>
    </tr>
<?php
    }
?>
</table>