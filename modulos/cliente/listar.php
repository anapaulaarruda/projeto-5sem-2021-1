<?php
    include("classes/Cliente.class.php");
    $clientes = Cliente::listar();
?>
<table>
<tr>
    <th>ID</th>
    <th>NOME</th>
    <th>EMAIL</th>
    <th>TELEFONE</th>
</tr>

<?php
if($clientes){
    foreach($clientes as $cliente){
?>
    <tr>
        <td><?php echo $cliente->getId();?></td>
        <td><?php echo $cliente->getNome();?></td>
        <td><?php echo $cliente->getEmail();?></td>
        <td><?php echo $cliente->getTelefone();?></td>
    </tr>
<?php
    }
}else{
    echo "<tr><td colspan='4'> Nenhum Registro Encontrado.</td></tr>";
}
?>
</table>