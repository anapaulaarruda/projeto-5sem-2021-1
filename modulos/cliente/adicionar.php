
<?php
if(isset($_POST['botao']) && $_POST['botao'] == "Salvar"){    
    include("classes/Cliente.class.php");
    $cliente = new Cliente();
    $cliente->setNome($_POST['nome']);
    $cliente->setEmail($_POST['email']);
    $cliente->setTelefone($_POST['telefone']);
    $cliente->adicionar();    
}
    

?>

<form method='post' action=''>
Nome:       <input type="text" name='nome'></br>
Email:      <input type="text" name='email'></br>
Telefone:   <input type="text" name='telefone'></br>

<input type='submit' name='botao' value='Salvar'>

</form>